<?php include_once "./include/header.php"; ?>

<?php
$cities = ["Ahero", "Athi River", "Awasi", "Bomet", "Bondo", "Bungoma", "Busia", "Burnt Forest", "Chuka", "Eldoret", "Eldama Ravine", "Embu", "Garissa", "Gilgil", "Homa Bay", "Iten", "Juja", "Kangemi", "Kakamega", "Kakuma", "Kamulu", "Kangundo-Tala", "Kapenguria", "Kapsabet", "Karuri", "Kendu Bay", "Kericho", "Keroka", "Kerugoya", "Kiambu", "Kikuyu", " Kilifi", "Kimili", "Kipkeleon", "Kisii", "Kisumu", "Kitale", "Kitengela", "Kitui", "Lavington", "Lodwar", "Londiani", "Limuru", "Luanda",    "Litein", "Machakos", "Makuyu", "Malaba", "Malakisi", "Malindi",  "Mandera", "Maragua", "Mariakani", "Matuu", "Maua", "Mbita point", "Meru", "Migori", "Mlolongo", "Mombasa",  "Molo", "Moyale", "Mtwapa", "Muhoroni", "Mumias", "Mwingi", "Nairobi", "Naivasha", "Nakuru", "Nambale", "Nandi Hills", "Nanyuki", "Narok", "Nyamira", "Nyahururu", "Ogembo", "Ol Kalou", "Ongata Rongai", "Oyugis", "Rongo", "Ruai", "Rumuruti", "Siaya", "Suneka", "Tabaka", "Tambach", "Taveta", "Thika", "Ugunja", "Ukunda", "Ukwala", "Vihiga", "Voi", "Wote", "Wundanyi", "Yala", ""   ];
?>
<?php include_once "msg/register.php"; ?>
<div class="container" style="margin-top: 30px; max-width: 800px;margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Register as Service Provider</h3>
            </div>
            <hr>


            <form action="scripts/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact" minlength="10"
                        maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 2</label>
                    <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        >
                </div>

                <div class="form-group">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Photo(Square Size)</label>
                    <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Add Description</label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Tell something about you..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter 6 Character Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                        <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="House keeper">House Keeper</option>
                        <option value="carpenter">Carpenter</option>
                        <option value="Gardener">Gardener</option>
                        <option value="Pool and fountain keeper">Pool/Fountain keeper</option>


                    </select>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="register"
                    id="register">Register</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";
