<style>
iframe{
  height: 569px;
}

.function{
  width: 60%;
  height: 60px;
}

</style>


                            <div class="modal-body">
                            <div class="function">
                              <button id="ordit" class="btn">90 degree orbit</button>
                              <button id="rotate" class="btn">rotate</button>
                            </div>
             <iframe
  id="embedded-human"
  frameBorder="0"
  width="1000"
  height="477"
  allowFullScreen="true"
  src="https://human.biodigital.com/widget?be=1M8m&bgstd=51,64,77,255,255,255&ui-annotations=true&ui-tools=true&dk=78bb6bb0a95af471200df13406b466c02944f4b4">
</iframe>
    <script src="https://developer.biodigital.com/builds/api/2/human-api.min.js"></script>

                        
                     </div>
                    

                     <script type="text/javascript">
                     var human = new HumanAPI("embedded-human");
                     $("#ordit").click(function(){
                      orbit();
                     });

                     $("#rotate").click(function(){
                      rotate();
                     });

                       orbit = function(){
                        human.send("camera.orbit", { yaw: 90 });
                      };

                      rotate = function(){
                        (function rotateCamera() {
    requestAnimationFrame(rotateCamera);
    human.send("camera.orbit", { yaw: 0.4 });
})();
                      };

                     </script>
