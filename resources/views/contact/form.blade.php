<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  
<form class="form-horizontal" method="POST" action="/contact" >
  
   {{ csrf_field() }}
      
  <div class="form-group" >
   <label for="Name">Name: </label>
   <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
  </div>
  <div class="form-group">
   <label for="email">Email: </label>
   <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
  </div>
  <div class="form-group">
   <label for="message">Message: </label>
   <textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" value="Send">Send</button>
  </div>
    
</form>