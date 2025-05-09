<div class="container-fluid bga contact">
    <div class="flex-container cont6">
        <div class="row contact a" style="margin-bottom: 0;">
            <div class="col contacta">
                <div class="contactbox1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <h4 style="color: #00a63f;">CALL US</h4>
                    <p class="contactp">09398380417</p>
                </div>
                
            </div>
            <div class="col contactb">
                <div class="contactbox2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                    <h4 style="color: #00a63f;">EMAIL US</h4>
                    <p class="contactp">info.microbloomofficial@gmail.com</p>
                    <!-- <p class="contactp">contact@email.com</p> -->
                </div>
            </div>
            <div class="col contactc">
                <div class="contactbox3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <h4 style="color: #00a63f;">VISIT US</h4>
                    <p class="contactp">P. Paredes St, Sampaloc</p>
                    <p class="contactp">, Manila, 1015 Metro Manila</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class = "container-fluid bgb contact">
    <div class="flex-container fieldbox" style="background-color: #17273a;">
        <!-- <div class="circle">
            
        </div> -->
        <div class="row contact b" style="margin-top: 1%;">
            <div class="col field">
                <div class="fieldbox1">
                    <div class="row inner contact-a">
                        <!-- <div class="col contactd">
                            <p class ="p5c">CONTACT</p>
                        </div> -->
                        <!-- <div class="col contacte">
                            <p class ="p6c">US</p>
                        </div> -->
                    </div>
                    <!-- <h2>Contact Us</h2> -->
                    <!-- <p class="greeting">Email us with any questions or inquiries or call 09xxxxxx</P> -->
                    <form action="<?php echo base_url('bettermail/sendbest'); ?>" method="post">
                        <h3 style="color: #00a63f;text-align:justify;font-weight:500;">CONTACT US</h3>
                        <!-- <label for="name">Name</label> -->
                        <input type="text" name="name" class="form-control" id="nameid" style="background-color: transparent;" placeholder="Your Name" required>

                        <!-- <label for="email">Email</label> -->
                        <input type="text" name="email" class="form-control" id="emailid" placeholder="Email" required>

                        <!-- <label for="subject">Subject</label> -->
                        <input type="text" name="subject" class="form-control" id="subjectid" placeholder="Subject" required>

                        <!-- <label for="message">Message</label> -->
                        <br>
                        <textarea rows = "10" name="message" id="message" placeholder="Message" required></textarea>

                        <!-- <input type="submit" value="SUBMIT"> -->
                        <button type="submit" class="btn btn-primary" style="box-shadow: none;margin:0; font-size: 15px;font-family: Lato,sans-serif;
                        font-weight: 900;">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
