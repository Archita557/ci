<!DOCTYPE html>

<html>
    <head>
        <title>post</title>

        <!-- style.css -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/admincss/adminpanel.css">

        <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

        <!-- Font Awsome -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Bootstrap Grid system -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap-grid.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>    
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- header-menu Start -->
            <div class="header">
                <div class="header-menu">
                    <div class="title">Cook<span> Book</span></div>
                    <div class="sidebar-btn">
                    <i class= "fas fa-bars"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('admin/logout');?>">
                                <i class="fa fa-user-circle"></i><span> Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- header-menu end -->
            <!-- Sidebar Start -->
           <div class="sidebar">
               <div class="sidebar-menu">
                   <center class="profile">
                       <img src="<?php echo base_url();?>asset/img2/photo-1491972690050-ba117db4dc09.jfif" alt="">
                       <p>Archita Dey</p>
                   </center>


                  



                       

                   <li class="item">
                    <a href="index" class="menu-btn">
                        <i class="fa fa-home"></i><span> Home</span>
                    </a>
                </li>
            

                   <li class="item">
                    <a href="<?php echo base_url();?>admin" class="menu-btn">
                        <i class="fas fa-heading"></i><span> Header</span>
                    </a>
                </li>

                


           

                


                <li class="item" id="posts">
                <a href="<?php echo base_url();?>addpost" class="menu-btn">
                        <i class="fa fa-edit"></i><span>Posts</span>
                    </a>
                </li>

                


                <li class="item">
                    <a href="<?php echo base_url();?>author" class="menu-btn">
                        <i class="fa fa-user-secret"></i><span>Author</span>
                    </a>
                </li>

                

       
                <li class="item">
                    <a href="<?php echo base_url();?>ourteam" class="menu-btn">
                        <i class="fa fa-users"></i><span>My Team</span>
                    </a>
                </li>

                


                
                <li class="item" id="contact">
                    <a href="#contact" class="menu-btn">
                        <i class="fas fa-phone-alt"></i><span>Contact Us <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="<?php echo base_url();?>information">
                            <i class="fa fa-address-book" aria-hidden="true"></i><span>Information</span>
                        </a>  
                        <a href="<?php echo base_url();?>message">
                            <i class="fa fa-envelope" aria-hidden="true"></i><span>Message</span>
                        </a>  
                    </div>
                </li>  


                
                <li class="item">
                    <a href="<?php echo base_url();?>about" class="menu-btn">
                        <i class="fa fa-info-circle"></i><span>About Us</span>
                    </a>
                </li>

                

                
               </div>
</div>

            <!-- Sidbar End -->


            <!-- Header Part -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Post Section
                        </div>
                        <a class="btn" href="http://localhost/ci/post">Add Post</a>
                        
                        <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Recipe</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Descriptions</th>
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <?php
  foreach($fetchpost as $post){
      ?>
  <tbody>
    <tr>
    
      

      <td><?php echo substr($post->recipename,0,5);?></td>
      <td><?php echo substr($post->username,0,5);?></td>
      <td><?php echo $post->date;?></td>
      <td><?php echo substr($post->ingredients,0,10);?>...</td>
      <td><?php echo substr($post->descriptions,0,10);?>...</td>
      
      <td><img height="50px" width="50px" src="<?php echo base_url().'asset/uploads/'.$post->recipepicture;?>"></td>
     
      
      <td><a class="btn" href="<?php echo site_url('admin/editadd/'.$post->id)?>" role="button">Edit</a>
      <a class="btn" href="<?php echo site_url('admin/deleteaddpost/'.$post->id)?>" role="button">Delete</a>
      <a class="btn" href="<?php echo site_url('admin/viewadd/'.$post->id)?>" role="button">View</a></td>

    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
<?php echo $this->pagination->create_links();?>
            </div>
              <!-- Main container end -->
        </div>
         <!-- Wrapper end -->
         
         <script type="text/javascript">
         $(document).ready(function(){
             $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
             });
         });
        </script>




    </body>
    </html>