const videoPlayer = document.querySelector("#player");
const canvasElement = document.querySelector("#canvas");
const captureButton = document.querySelector("#capture-btn");
const imagePicker = document.querySelector("#image-picker");
const imagePickerArea = document.querySelector("#pick-image");
const newImages = document.querySelector("#newImages");

// Image dimensions
const width = 320;
const height = 240;
let zIndex = 1;

const createImage = (src, alt, title, width, height, className) => {
  let newImg = document.createElement("img");

  if (src !== null) newImg.setAttribute("src", src);
  if (alt !== null) newImg.setAttribute("alt", alt);
  if (title !== null) newImg.setAttribute("title", title);
  if (width !== null) newImg.setAttribute("width", width);
  if (height !== null) newImg.setAttribute("height", height);
  if (className !== null) newImg.setAttribute("class", className);

  return newImg;
};

const startMedia = () => {
  if (!("mediaDevices" in navigator)) {
    navigator.mediaDevices = {};
  }

  if (!("getUserMedia" in navigator.mediaDevices)) {
    navigator.mediaDevices.getUserMedia = constraints => {
      const getUserMedia =
        navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

      if (!getUserMedia) {
        return Promise.reject(new Error("getUserMedia is not supported"));
      } else {
        return new Promise((resolve, reject) =>
          getUserMedia.call(navigator, constraints, resolve, reject)
        );
      }
    };
  }

  navigator.mediaDevices
    .getUserMedia({ video: true })
    .then(stream => {
      videoPlayer.srcObject = stream;
      videoPlayer.style.display = "block";
    })
    .catch(err => {
      imagePickerArea.style.display = "block";
    });
};


captureButton.addEventListener("click", event => {
  
  canvasElement.style.display = "block";
  const context = canvasElement.getContext("2d");
  context.drawImage(videoPlayer, 0, 0, canvas.width, canvas.height);

  videoPlayer.srcObject.getVideoTracks().forEach(track => {
    // track.stop();
  });

  // Converting the data so it can be saved as a file
  let picture = canvasElement.toDataURL();

  // Saving the file by posting it to the server
  fetch("./api/save_image.php", {
    method: "post",
    body: JSON.stringify({ data: picture })
  })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        // Creating the image and giving it the CSS style
        let newImage = createImage(
          data.path,
          "new image",
          "new image",
          width,
          height,
          "masked"
        );
        //Displaying the captured image
        console.log(newImage);
        zIndex++;
        newImage.style.zIndex = zIndex;
        newImages.appendChild(newImage);
        canvasElement.classList.add("masked");
      }
    })
    .catch(error => console.log(error));
});

window.addEventListener("load", event => startMedia());
