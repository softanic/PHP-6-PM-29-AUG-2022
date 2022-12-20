  <?php
 include 'header.php';
 $q="select * from news";
 $res=mysqli_query($conn,$q);
 
 ?>
                 <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Blank Page</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">Blank Page</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12  mt-3">                          
                        <div class="card">  
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h4 class="card-title">All News</h4>                                   
                            </div>
                            <div class="card-body">
                               <table class="table table-bordered">
									<tr>
										
										<th>News Id</th>
										<th>Title</th>
										<th>date</th>
										<th>reporter</th>
										<th>city</th>
										<th>Action</th>
									</tr>
									<?php
									while($row=mysqli_fetch_array($res))
									{
										echo "<tr>";
										echo "<td>{$row['news_id']}</td>";
										echo "<td>{$row['title']}</td>";
										echo "<td>{$row['date']}</td>";
										echo "<td>{$row['city']}</td>";
										echo "<td>{$row['reporter']}</td>";
										echo "<td><a href=''>Edit</a> | <a href='delete-news.php?id={$row['news_id']}'>Delete</a></td>";	
										echo "</tr>";
									}
									?>
							   </table>
                            </div>                                
                        </div>
                    </div>



                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->



       
 
 <?php
 include 'footer.php';
 ?>
 