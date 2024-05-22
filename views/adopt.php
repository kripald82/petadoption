

    <section class="section-padding" id="register">
      
        <div class="container bg-light mt-5">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pt-5">
                        <h2>Adoption Form</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident dicta ipsum, totam laudantium optio!</p>
                    </div>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-md-6">
                   
                      
                   
                
                    <form action="/submit_adoption_request" method="post">
                        <div class="mb-3"> <label for="fullName">Your Full Name:</label>
                            <input class="form-control"  type="text" id="fullName" name="fullName" value="John Doe">
                            <!-- <div id="passwordHelpBlock" class="form-text">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                              </div> -->
                        </div>
                      
                            <div class="mb-3">
                        <label for="age">Age:</label>
                        <input class="form-control"  type="text" id="age" name="age" value="30"></div>
                       
                        <div class="mb-3">
                        <label for="profession">Your Current Profession:</label>
                        <input class="form-control"  type="text" id="profession" name="profession" value="Engineer"></div>


                        <div class="mb-3">
                        <label for="phone">Phone Number:</label>
                        <input class="form-control"  type="text" id="phone" name="phone" value="1234567890"></div>
                      
                      
                        <div class="mb-3">
                        <label for="address">Address:</label>
                        <textarea class="form-control"  id="address" name="address" style="vertical-align: middle;">123 Main St, City, Country</textarea></div>
                       
                       
                        <div class="mb-3">
                        <label for="petName">Name / ID of the Pet You Would Like to Adopt:</label>
                        <input class="form-control"  type="text" id="petName" name="petName" value="Max"></div>
                        
                        
                        <div class="mb-3">
                        <label>Do you stay in an apartment or an individual house?</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="apartment" name="residence" value="Apartment" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Apartment
                          </label></div>
                          <div class="form-check">
                       
                        <input class="form-check-input"  type="radio" id="individualHouse" name="residence" value="Individual House">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Individual House
                          </label></div>
                       </div>


                        <div class="mb-3">
                            
                        <label>Whether you are living in an own house or rented premises?</label>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="ownHouse" name="ownership" value="Own House" checked>
                        
                        <label class="form-check-label" for="flexRadioDefault1">Own House</label></div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="rented" name="ownership" value="Rented">
                        
                        <label class="form-check-label" for="flexRadioDefault1">Rented</label></div></div>



                        <div class="mb-3">
                        <label>If your home is rented, do you have your landlord's permission to have a pet?</label>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="permissionYes" name="permission" value="Yes" checked>
                      
                        <label class="form-check-label" for="flexRadioDefault1">Yes</label></div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="permissionNo" name="permission" value="No">
                       
                        <label class="form-check-label" for="flexRadioDefault1">No</label></div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="permissionAsk" name="permission" value="Yet to ask">
                       
                        <label class="form-check-label" for="flexRadioDefault1">Yet to Ask</label></div></div>


                        <div class="mb-3">
                        <label>Has every member of your family given their agreement to adopt a pet?</label>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="agreementYes" name="agreement" value="Yes" checked>
                    
                      
                       
                            <label class="form-check-label" for="flexRadioDefault1">Yes</label></div>
                            <div class="form-check">
                        <input class="form-check-input"  type="radio" id="agreementNo" name="agreement" value="No">
                        
                        <label class="form-check-label" for="flexRadioDefault1">No</label></div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="agreementAsk" name="agreement" value="Yet to ask">
                       
                        <label class="form-check-label" for="flexRadioDefault1">Yet to Ask</label> </div></div>


                        <div class="mb-3">
                        <label for="familyDetails">Please give us details of who lives with you at your current address & your relationship with them:</label>
                        <textarea class="form-control"  id="familyDetails" name="familyDetails" style="vertical-align: middle;">Family members and their relationship</textarea></div>
                        
                        <div class="mb-3">
                        <label for="caretaker">Who will be the primary caretaker for the pet?</label>
                        <input class="form-control"  type="text" id="caretaker" name="caretaker" value="John Doe"> </div>
                        
                        
                        <div class="mb-3">
                        <label>Have you ever raised a pet/ are currently raising a pet?</label>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="raisedYes" name="raisedPet" value="Yes" checked>
                       
                        <label class="form-check-label"  for="raisedYes">Yes</label></div>

                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="raisedNo" name="raisedPet" value="No">
                       
                        <label  class="form-check-label" for="raisedNo">No</label></div></div>
                       
                        <div class="mb-3">
                        <label for="petDetails">If yes, please tell us a little bit more about them:</label>
                        <textarea class="form-control"  id="petDetails" name="petDetails" style="vertical-align: middle;">Description of previous/current pets</textarea></div>


                        <div class="mb-3">
                        <label>What is the reason for adopting a pet now?</label>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="reasonGuarding" name="adoptionReason" value="Guarding" checked>
                       
                        <label  class="form-check-label" for="reasonGuarding">To use for guarding purpose</label></div>

                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="reasonCompanion" name="adoptionReason" value="Companion">
                       
                        <label  class="form-check-label" for="reasonCompanion">To raise as a companion and a member of the family</label></div>

                        <div class="form-check">
                        <input  class="form-check-input"  type="radio" id="reasonKid" name="adoptionReason" value="Kid">
                     
                      
                        <label for="reasonKid">My kid wants a pup</label></div>

                        <div class="form-check">
                        <input  class="form-check-input"  type="radio" id="reasonOther" name="adoptionReason" value="Other">
                        
                        <label class="form-check-label" for="reasonOther">Other</label> </div></div>

                        <div class="mb-3">
                        <label>Where will the pet be kept during the day and night?</label>
                        <div class="form-check">
                        <input  class="form-check-input"  type="radio" id="keptInside" name="petLocation" value="Inside" checked>
                        <label  class="form-check-label" for="keptInside">Inside the house or apartment</label></div>

                        <div class="form-check">
                        <input  class="form-check-input"  type="radio" id="freeToStay" name="petLocation" value="FreeToStay">
                        <label  class="form-check-label" for="freeToStay">Pet would be free to stay wherever they like - indoors/outdoors</label></div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="strictlyOutdoors" name="petLocation" value="Outdoors">
                        <label  class="form-check-label" for="strictlyOutdoors">Strictly outdoors</label></div>

                        <div class="form-check">
                        <input  class="form-check-input" type="radio" id="kennel" name="petLocation" value="Kennel">
                        <label  class="form-check-label" for="kennel">Kennel or shed area</label></div>

                        <div class="form-check">
                        <input  class="form-check-input" type="radio" id="locationOther" name="petLocation" value="Other">
                        <label  class="form-check-label" for="locationOther">Other</label> </div></div>
                    
                        <div class="mb-3">
                        <label>Will the pet have to be alone at home during the day? If yes, how many hours in a day?</label>
                        <div class="form-check">
                        <input  class="form-check-input"  type="radio" id="aloneYes" name="aloneDuringDay" value="Yes" >
                    
                       
                        <label class="form-check-label" for="aloneYes">Yes, for </label> </div></div>
                        <select class="form-control" id="hoursAlone" name="hoursAlone">
                            <option value="1-2">1 to 2 hours</option>
                            <option value="3-5">3 to 5 hours</option>
                            <option value="6-8">6 to 8 hours</option>
                            <option value="9-10">9 to 10 hours</option>
                        </select></div>


                        <div class="my-3">
                        <label>For how many hours in a day will the pet be kept tied up?</label>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="tiedUpZero" name="hoursTiedUp" value="Zero hours" checked>
                        <label class="form-check-label" for="tiedUpZero">Zero hours</label></div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="tiedUp1-2" name="hoursTiedUp" value="1-2 hours">
                        <label  class="form-check-label" for="tiedUp1-2">For an hour or two when the maid comes to clean</label></div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="tiedUpFew" name="hoursTiedUp" value="Few hours">
                        <label  class="form-check-label" for="tiedUpFew">For a few hours everyday when everyone is busy</label></div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" id="tiedUpMostly" name="hoursTiedUp" value="Mostly tied up">
                        <label  class="form-check-label" for="tiedUpMostly">Mostly be tied up to prevent them from running away, but we will provide daily walks</label> </div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" id="tiedUpOther" name="hoursTiedUp" value="Other">
                        <label  class="form-check-label" for="tiedUpOther">Other</label>
                       </div>
                    </div>
                        
                        
                        <div class="my-3">
                          
                        <label>Are you willing to spend for the one time expense of sterilization of the pet?</label>
                        <div class="form-check">
                        <input class="form-check-input"   type="radio" id="sterilizationYes" name="sterilizationExpense" value="Yes" checked>
                        <label class="form-check-label" for="sterilizationYes">Yes</label></div>
                        <div class="form-check">
                        <input  class="form-check-input"   type="radio" id="sterilizationNo" name="sterilizationExpense" value="No">
                        <label class="form-check-label" for="sterilizationNo">No</label>
                    </div>
                    </div>
                        
                        
                        <div class="mb-3">
                        <label for="diet">What diet would your pet be on?</label>
                        <textarea class="form-control"  id="diet" name="diet" style="vertical-align: middle;">Pet's diet details</textarea> </div>
                       
                       
                        <div class="mb-3">
                        <label>If the team thinks it's necessary, would you be agreeable to a pre-adoption house check?</label>

                        <div class="form-check">
                        <input  class="form-check-input"   type="radio" id="houseCheckYes" name="houseCheck" value="Yes" checked>
                        <label class="form-check-label" for="houseCheckYes">Yes</label> </div>

                        <div class="form-check">

                        <input  class="form-check-input"   type="radio" id="houseCheckNo" name="houseCheck" value="No">
                        <label class="form-check-label" for="houseCheckNo">No</label> </div> </div>
                       
                        <div class="mb-3">
                        <label for="additionalInfo">Anything else you wish to add?</label>
                        <textarea class="form-control"  id="additionalInfo" name="additionalInfo"  style="vertical-align: middle;">Additional information</textarea><br><br>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-warning text-dark text-center" >Submit</button></div>
                        
                    </form>
                </div>
            </div>
        </div>
      

       
    </section>
    