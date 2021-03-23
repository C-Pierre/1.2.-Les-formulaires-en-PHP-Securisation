<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.2. Les formulaires en PHP - Sécurisation</title>
</head>
<body>
    <form action="thanks.php" method="POST">
        <fieldset>
            <legend>My first form</legend>
            <div>
                <label for="firstname">Firstname :</label>
                <input type="text" id="firstname" name="user_firstname" required>
                <p><?php if(isset($errors['firstname1'])) echo $errors['firstname1'];?></p>
            </div>
            <div>
                <label for="lastname">Lastname :</label>
                <input type="text" id="lastname" name="user_lastname" required>
                <p><?php if(isset($errors['lastname1'])) echo $errors['lastname1']?></p>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="user_email" required>
                <p><?php if(isset($errors['email1'])) echo $errors['email1']?></p>
            </div>
            <div>
                <label for="phone">Phone :</label>
                <input type="phone" id="phone" name="user_phone" required>
                <p><?php if(isset($errors['phone1'])) echo $errors['phone1']?></p>
            </div>
            <div>
                <label for="object">Object :</label>
                <select id="object" name="user_object">
                    <option value="#1">#1</option>
                    <option value="#2">#2</option>
                    <option value="#3">#3</option>
                    <option value="#4">#4</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="user_message" required></textarea>
                <p><?php if(isset($errors['message1'])) echo $errors['message1']?></p>
            </div>
            <div class="button">
                <button  type="submit">Envoyer votre message</button>
            </div>
        </fieldset>
    </form>
</body>
</html>
