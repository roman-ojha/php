console.log(document);

const obj = {
  name: "roman",
  id: 10,
  gender: "male",
};

function user(name, id, gender) {
  this.name = name;
  this.id = id;
  this.gender = gender;
}

const userObj = new user("roman", 1, "male");
console.log(userObj);

let arr = new Array();
arr[0] = "roman";
arr[2] = "jack";

arr.push("thor");
arr.pop();
arr = arr.concat(["thor"]);
console.log(arr.join("-"));
console.log(arr.sort());
console.log(arr.reverse());
arr.shift();
arr.unshift("harry");
console.log(arr.toString());
arr.splice(1, 2);
console.log(arr.toString());

var num = new Number(1.7976931348623157e308);
console.log(num);

var num = "12210";

function validate() {
  var num = document.getElementById("field").value;
  //   var pattern = /^[0-9]+$/;
  var pattern = /^[a-zA-Z]+$/;
  if (num.match(pattern)) {
    console.log("Pattern matched");
  } else {
    document.getElementById("field").value = "";
    document.getElementById("field").focus();
    console.log("Pattern doesn't match");
  }
}

function validateUser() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  console.log(password);
  var pattern = /^\^[0-9]*\$$/;
  //   var isNotEmpty = /^\^[0-9a-zA-Z]+/;
  if (username == "" || password == "") {
    console.log("please field all field");
  } else {
    if (password.match(pattern)) {
      console.log("Password is valid");
    } else {
      console.log("password is not valid");
    }
  }
}
