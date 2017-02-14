<style>
iframe{
     height: 700px; 
}

.function{
  width: 60%;
  height: 60px;
}

</style>

 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6 col-xl-12">
                            <!-- input box's box -->
                            <div class="modal-body">
                            <div class="function">
                              <button id="ordit" class="btn">90 degree orbit</button>
                              <button id="rotate" class="btn">rotate</button>
                            </div>
              <iframe id="myWidget"
          src="https://human.biodigital.com/widget/?m=cochlear_implant&dk=78bb6bb0a95af471200df13406b466c02944f4b4"
          width="100%"
          height="100%">
    </iframe>
    <script src="https://developer.biodigital.com/builds/api/2/human-api.min.js"></script>

                        
                     </div>
                     </section>

                     <script type="text/javascript">
                     var human = new HumanAPI("myWidget");
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
