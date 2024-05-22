

    <section class="section-padding" id="register">
      
        <div class="container bg-light mt-5">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pt-5">
                        <h2>Register</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident dicta ipsum, totam laudantium optio!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto" >
                   
                      
                   
                
                    <form action="/submit_adoption_request" method="post">
                        <div class="my-3">
                        <label for="fullName">Full Name:</label>
                        <input class="form-control" type="text" id="fullName" name="fullName" required></div>
                        <div class="my-3">
                        <label>Gender:</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked>
                        <label class="form-check-label" for="male">Male</label></div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="female" >
                        <label class="form-check-label" for="female">Female</label></div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="other" name="gender" value="other" checked>
                            <label class="form-check-label" for="male">Other</label></div>
                    
                    </div>
                        <div class="my-3">
                        <label for="email">Email Address:</label>
                        <input class="form-control" type="email" id="email" name="email" required></div>
                        <div class="my-3">
                        <label for="password">Password:</label>
                        <input  class="form-control"type="password" id="password" name="password" required></div>
                        <div class="my-3">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" required></div>
                        <div class="my-3">
                        <label for="phone">Phone Number:</label>
                        <input class="form-control"  type="text" id="phone" name="phone"></div>
                        <div class="my-3">
                        <label for="address">Address:</label>
                        <textarea  class="form-control" id="address" name="address" style="vertical-align: middle;"></textarea></div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-warning text-dark text-center" >Submit</button></div>
                        
                    </form>
                </div>
            </div>
        </div>
      

       
    </section>
    