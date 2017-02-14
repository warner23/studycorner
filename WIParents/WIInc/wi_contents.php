 <style>
.table {
    width: 28% !important;
    margin-left: 530px;
}
 </style>

 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Student Dashboard
         
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                       <div class="section">
                       <div class="title">Please select your Child's Name</div>
                       <table class="table">
  <thead>
    <tr>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
                        <?php  $parent->students();  ?>

                        </tbody>
</table>
</div><!-- /.row (main row) -->
                        </section><!-- right col -->
                    

             
            </aside><!-- /.right-side -->