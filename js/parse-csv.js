function getSurveyDB() {
  var code = document.getElementById("surveyCode").value;
  var params = "sCode=" + code;
  var data = [];
  var surveyList = [];
  var found = false;

  

  if (document.getElementById("surveyCode").validity.valid == true) {
    document.getElementById("uploadingScreen").style.display = "block";
    xhr = new XMLHttpRequest();
    xhr.open("POST", "getSurvey.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      //Call a function when the state changes.
      if (xhr.readyState == 4 && xhr.status == 200) {
        data = JSON.parse(xhr.responseText);
        //alert(data);

        if (!localStorage.getItem("surveyList")) {
          surveyList.push([code, data[0].surveyName]);
          localStorage.surveyList = JSON.stringify(surveyList);
          getCsvDropbox(data[0].surveyURL, code);
        } else {
          for (i = 0; i < surveyList.length; i++) {
            if (surveyList[i][0] == code) {
              found = true;
            }
          }
          if (found == false) {
            surveyList = JSON.parse(localStorage.getItem("surveyList"));
            surveyList.push([code, data[0].surveyName]);
            localStorage.setItem("surveyList", JSON.stringify(surveyList));
            getCsvDropbox(data[0].surveyURL, code);
          }
        }
      }
    };
    xhr.send(params);
  }

  return false;
}

function getCsvDropbox(path, code) {
  var xhr = new XMLHttpRequest();
  var results = [];
  xhr.onreadystatechange = function () {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      //alert(JSON.parse(xhr.responseText));
      results = Papa.parse(xhr.responseText);
      localStorage.setItem(code + "", JSON.stringify(results));
      console.log(results);
      setTimeout(function () {
        window.location.replace("http://localhost/ootomast/index.php");
      }, 100);
    }
  };
  xhr.open("POST", "https://content.dropboxapi.com/2/files/download");
  xhr.setRequestHeader("Authorization", "ACCESS KEY");
  xhr.setRequestHeader("Content-Type", "application/octet-stream");
  xhr.setRequestHeader("Dropbox-API-Arg", '{"path":"' + path + '"}');
  xhr.send();
}

function parseURL() {
  var url = document.getElementById("urlFile").value;
  var name = document.getElementById("surveyNameURL").value;
  var jsonResponse;
  var code = Math.random().toString(36).substr(2, 6);

  if (
    document.getElementById("urlFile").validity.valid == true &&
    document.getElementById("surveyNameURL").validity.valid
  ) {
    document.getElementById("uploadingScreen").style.display = "block";
    Papa.parse(url, {
      download: true,
      complete: function (results) {
        //console.log(results);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                jsonResponse = JSON.parse(xhr.responseText);
                //alert(jsonResponse["id"]);
                uploadSurveyMeta(code, jsonResponse["id"], name);
                updateSurveyList(name, code);
                localStorage.setItem(code + "", JSON.stringify(results));
            }
        };
        xhr.open("POST", "https://content.dropboxapi.com/2/files/upload");
        xhr.setRequestHeader("Authorization", "ACCESS KEY");
        xhr.setRequestHeader("Content-Type", "application/octet-stream");
        xhr.setRequestHeader(
        "Dropbox-API-Arg",
        '{"path":"/csv/' + name + '.csv", "mode":{".tag":"overwrite"}}'
        );
        xhr.send(Papa.unparse(results));
      },
    });
    alert("This is your survey's unique code: " + code);
    return false;
  } else {
    return false;
  }

  return false;
}

function parseUpload() {
  var file = document.getElementById("fileCSV").files[0];
  var name = document.getElementById("surveyNameFile").value;
  var jsonResponse;
  var code = Math.random().toString(36).substr(2, 6);

  if (
    file != null &&
    document.getElementById("surveyNameFile").validity.valid == true
  ) {
    document.getElementById("uploadingScreen").style.display = "block";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState == XMLHttpRequest.DONE) {
        jsonResponse = JSON.parse(xhr.responseText);
        //alert(jsonResponse["id"]);
        uploadSurveyMeta(code, jsonResponse["id"], name);
      }
    };
    xhr.open("POST", "https://content.dropboxapi.com/2/files/upload");
    xhr.setRequestHeader("Authorization", "ACCESS KEY");
    xhr.setRequestHeader("Content-Type", "application/octet-stream");
    xhr.setRequestHeader(
      "Dropbox-API-Arg",
      '{"path":"/csv/' + name + '.csv", "mode":{".tag":"overwrite"}}'
    );
    xhr.send(file);

    if (name != "") {
      Papa.parse(file, {
        download: true,
        complete: function (results) {
          console.log(results);
          updateSurveyList(name, code);
          localStorage.setItem(code + "", JSON.stringify(results));
        },
      });
    } else {
    }

    alert("This is your survey's unique code: " + code);
    return false;
  } else {
    return false;
  }
}

function uploadSurveyMeta(surveyCode, surveyID, surveyName) {
  var params = "sID=" + surveyID + "&sCode=" + surveyCode + "&sName=" + surveyName;
          
  xhr = new XMLHttpRequest();
  
  xhr.open("POST", "uploadsurvey.php");
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {//Call a function when the state changes.
    if(xhr.readyState == 4 && xhr.status == 200) {
      setTimeout(function () {
        window.location.replace("http://localhost/ootomast/index.php");
      }, 100);
    }
  }

  xhr.send(params);
}

function deleteSurvey(surveyID) {
  var key = 0;
  var sList = JSON.parse(localStorage.getItem("surveyList"));
  var clickhere = document.getElementById("clickHere");

  localStorage.removeItem(surveyID);

  if (confirm("Are you sure you want to delete this survey?") == true) {
    for (i = 0; i < sList.length; i++) {
      if (sList[i][0] == surveyID) {
        key = i;
      }
    }

    sList.splice(key, 1);

    localStorage.setItem("surveyList", JSON.stringify(sList));

    if (sList.length == 0) {
      clickhere.style.display = "block";
    }

    setTimeout(function () {
      window.location.replace("http://localhost/ootomast/index.php");
    }, 100);
  }
}

function updateSurveyList(surveyName, code) {
  if (!localStorage.getItem("surveyList")) {
    var surveyList = [];
    surveyList.push([code, surveyName]);

    localStorage.surveyList = JSON.stringify(surveyList);
  } else {
    var surveyList = [];
    surveyList = JSON.parse(localStorage.getItem("surveyList"));
    surveyList.push([code, surveyName]);

    localStorage.surveyList = JSON.stringify(surveyList);
  }
}

function generateSurveyList() {
  var output = "";
  var clickhere = document.getElementById("clickHere");
  if (!localStorage.getItem("surveyList")) {
    clickhere.style.display = "block";
  } else {
    var surveyList = [];
    surveyList = JSON.parse(localStorage.getItem("surveyList"));

    if (surveyList.length == 0) {
      clickhere.style.display = "block";
    } else {
      clickhere.style.display = "none";
    }

    for (var i = 0; i < surveyList.length; i++) {
      if (surveyList[i][1].length < 30) {
        output +=
          '<div style="display: grid; position: relative;"><button type="submit" class="card animated fadeIn" name="surveyId" style="border-radius: 20px; display: block; flex-direction: unset;" value="' +
          surveyList[i][0] +
          '"> ' +
          surveyList[i][1] +
          '</button><a href="#" class="fas fa-trash-alt" style="position: absolute; top: 40px; right: 40px; color: grey; font-size: 25px;" onclick="deleteSurvey(\'' +
          surveyList[i][0] +
          "')\"></a></div>";
      } else {
        output +=
          '<div style="display: grid; position: relative;"><button type="submit" class="card animated fadeIn" name="surveyId" style="border-radius: 20px; font-size: 15px; display: block; flex-direction: unset;" value="' +
          surveyList[i][0] +
          '"> ' +
          surveyList[i][1] +
          '</button><a href="#" class="fas fa-trash-alt" style="position: absolute; top: 40px; right: 40px; color: grey; font-size: 25px;" onclick="deleteSurvey(\'' +
          surveyList[i][0] +
          "')\"></a></div>";
      }
    }
  }
  return output;
}
