//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file; //this is a global variable and we'll use it inside multiple functions
let fileDropped;
var dropFileName = "";

button.onclick = ()=>{
  input.click(); //if user click on the button then the input also clicked
}

input.addEventListener("change", function(){
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  dropArea.classList.add("active");
  uploadFiles();
});

//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragText.textContent = "Release to Upload File";
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", ()=>{
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  dropFileName = file.name;
  uploadDroppedFile(); //calling function
});

function checkFile(){
  // Check whether the user select an valid file, if not, ask user to select one
  var files = document.getElementById('uploadFile').files;
  if(files.length==0 && dropFileName.length==0){
      alert("Please first choose or drop any file(s)...");
      window.location.replace("index.html");
      return;
  }
}

function uploadFiles() {

  var files = document.getElementById('uploadFile').files;
  var filenames="";

  // Get the filename of file uploaded
  for(var i=0;i<files.length;i++){
      filenames+=files[i].name+"\n";
  }
  
  //Ask user to press on the confirm button to proceed
  alert("Selected file(s) : "+filenames+"\nPress the submit button to convert file uploaded into CSV File."); 

}

function uploadDroppedFile(){
    //Ask user to press on the confirm button to proceed
    alert("Selected file(s) : "+dropFileName+"\nPress the submit button to convert file uploaded into CSV File."); 

    if(dropFileName.length>0){
      var formData = new FormData();
      formData.append("uploadFile", file[0]);

      var xhttp = new XMLHttpRequest();

      // Set POST method and upload file path
      xhttp.open("POST", "upload.php", true);

      // call on request changes state
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

          alert("In the function!!!!");

          var response = this.responseText;
          if(response == 1){
            alert("Upload successfully.");
          }else{
            alert("File not uploaded.");
        }
      }
    };

    // Send request with data
    xhttp.send(formData);
    }else{
      alert("Please select a file.");
    }
}