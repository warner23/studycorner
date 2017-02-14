
/** WIHuman_body NAMESPACE
 ======================================== */

var WIHuman_body = {};

var human = new HumanAPI("embedded-human");
WIHuman_body.Orbit = function(){
  human.send("camera.orbit", { yaw: 90 });
};

WIHuman_body.Rotate = function(){
alert("submitted");
rotate();

};

rotate = function(){
(function rotateCamera() {
    requestAnimationFrame(rotateCamera);
    human.send("camera.orbit", { yaw: 0.4 });
})();

};