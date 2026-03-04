<?php
 include_once 'header.php';
?>
    <form action="" method="post">
        <h1>Create Account</h1>
        <div>
            Account Number
            <input type="text" name="account_number" />
        </div>
        <div>
            Currency
           <select name="currency" id="currency">
                <option value="LAK">LAK</option>
                <option value="THB">THB</option>
                <option value="USD">USD</option>
           </select>
        </div>
        <div>
            User
           <select name="user" id="user">
                
           </select>
        </div>
        <button type="submit" value="Create" name="submit">Create</button>
    </form>
<?php
    include_once 'footer.php';
?>