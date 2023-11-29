<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | help page"; ?>
<?php require 'head.php'; ?>
<body>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

.form-label {
    font-weight: bold;
}

.form-control {
    height: 40px;
    font-size: 16px;
}

.btn-primary {
    background-color: #007bff;
    border: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3 !important;
}

@media only screen and (max-width: 600px) {
    .card-body {
        padding: 10px;
    }

    .form-control {
        height: 35px;
        font-size: 14px;
    }
}

    </style>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

    <div class="row mb-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card">
                <div class="card-header">Contact Us</div>
                <div class="card-body">
                    <form class="p-4 mt-0" action="https://formspree.io/f/mnqkknqo"
  method="POST"> <!-- Adjusted margin here -->
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Enter your Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email ID</label>
                            <input type="text" class="form-control" id="emailInput" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="messageTextarea" name="message"class="form-label">Enter your message</label>
                            <textarea type="text" class="form-control" id="messageTextarea" name="message" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




        <div class="row mb-5">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Health Tips</div>
                <div class="card-body">
                    <dt>Eat a healthy diet</dt>
                    <dd>Eat a combination of different foods, including fruit, vegetables, legumes, nuts and whole grains. Adults should eat at least five portions (400g) of fruit and vegetables per day. You can improve your intake of fruits and vegetables by always including veggies in your meal; eating fresh fruit and vegetables as snacks; eating a variety of fruits and vegetables; and eating them in season. By eating healthy, you will reduce your risk of malnutrition and noncommunicable diseases (NCDs) such as diabetes, heart disease, stroke and cancer.</dd>
                    <dt> Consume less salt and sugar</dt>
                    <dd>On the other hand, consuming excessive amounts of sugars increases the risk of tooth decay and unhealthy weight gain. In both adults and children, the intake of free sugars should be reduced to less than 10% of total energy intake. This is equivalent to 50g or about 12 teaspoons for an adult. WHO recommends consuming less than 5% of total energy intake for additional health benefits. You can reduce your sugar intake by limiting the consumption of sugary snacks, candies and sugar-sweetened beverages.</dd>
                    <dt>Be active</dt>
                    <dd>Physical activity is defined as any bodily movement produced by skeletal muscles that requires energy expenditure. This includes exercise and activities undertaken while working, playing, carrying out household chores, travelling, and engaging in recreational pursuits. The amount of physical activity you need depends on your age group but adults aged 18-64 years should do at least 150 minutes of moderate-intensity physical activity throughout the week. Increase moderate-intensity physical activity to 300 minutes per week for additional health benefits.</dd>
                    <dt>Don’t smoke</dt>
                    <dd>Smoking tobacco causes NCDs such as lung disease, heart disease and stroke. Tobacco kills not only the direct smokers but even non-smokers through second-hand exposure. Currently, there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are interested or plan to quit.
                    If you are currently a smoker, it’s not too late to quit. Once you do, you will experience immediate and long-term health benefits. If you are not a smoker, that’s great! Do not start smoking and fight for your right to breathe tobacco-smoke-free air.</dd>
                    <dt>Drink only safe water</dt>
                    <dd>Drinking unsafe water can lead to water-borne diseases such as cholera, diarrhoea, hepatitis A, typhoid and polio. Globally, at least 2 billion people use a drinking water source contaminated with faeces. Check with your water concessionaire and water refilling station to ensure that the water you’re drinking is safe. In a setting where you are unsure of your water source, boil your water for at least one minute. This will destroy harmful organisms in the water. Let it cool naturally before drinking.</dd>
                    <dt>Clean your hands properly</dt>
                    <dd>Hand hygiene is critical not only for health workers but for everyone. Clean hands can prevent the spread of infectious illnesses. You should handwash using soap and water when your hands are visibly soiled or handrub using an alcohol-based product.</dd>
                    <dt>Have regular check-ups</dt>
                    <dd>Regular check-ups can help find health problems before they start. Health professionals can help find and diagnose health issues early, when your chances for treatment and cure are better. Go to your nearest health facility to check out the the health services, screenings and treatment that are accessible to you.</dd>
                    Visit here to get more health tips.
                    <a href="https://fourwellness.co/blog/31-simple-wellness-tips-for-healthy-and-happy-living" target="_blank">Healthy & Happy Living Tips</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

    

</body>
</html>