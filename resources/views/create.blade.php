<div class="card">
    <div class="card-header">
        <h1 class="card-title">Buat Account Baru</h1>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="welcome.html" method="post">
            <label for="first-name">First Name : </label>
            <br>
            <input type="text" name="first-name" id="first-name" class="name" placeholder="Dafa">
            <br>
            <label for="last-name">Last Name :</label>
            <br>
            <input type="text" name="last-name" id="last-name" class="name" placeholder="Alfauzi">
            <br>
            <label for="gender">Gender :</label>
            <br>
            <input type="radio" name="gender" id="">Male
            <br>
            <input type="radio" name="gender" id="">Female
            <br>
            <label for="Nationatity">Nationality</label>
            <br>
            <select name="Nationatity" id="Nationatity">
                <option value="wna">WNI</option>
                <option value="wni">WNA</option>
            </select>
            <br>
            <label for="language">Bahasa</label>
            <br>
            <input type="checkbox" name="language" id="">Bahasa Indonesia
            <br>
            <input type="checkbox" name="language" id="">English
            <br>
            <input type="checkbox" name="language" id="">Other
            <br>
            <label for="bio">Bio</label><br>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        
        </form>
    </div>
