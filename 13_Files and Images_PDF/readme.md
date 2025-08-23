# 📂 PHP File Handling

-   PHP me file handling ka use data ko read, write, append, delete karne ke liye hota hai.

# 🔑 Important Functions:

-   fopen() – file open karne ke liye

-   fread() – file read karne ke liye

-   fwrite() – file me write karne ke liye

-   fclose() – file close karne ke liye

-   file_exists() – check karta hai file exist karti hai ya nahi

-   File delete karne ke liye unlink() function use hota hai.

# 📌 Modes in fopen()

-   'r' → Read only

-   'w' → Write (overwrite karega agar file pehle se hai)

-   'a' → Append (purane data ke sath naya add karega)

-   'x' → Create new file (agar pehle se hai to error)

# Common Image Functions

-   PHP me image handling ke liye GD Library ka use hota hai. Isme hum images create, resize, crop, watermark, convert kar sakte hain.

-   Create new → imagecreatetruecolor()

-   Load existing → imagecreatefromjpeg(), imagecreatefrompng(), imagecreatefromgif()

-   Save/Output → imagejpeg(), imagepng(), imagegif()

-   Colors → imagecolorallocate()

-   Draw → imagerectangle(), imageellipse(), imageline()

-   Resize → imagecopyresampled()

-   Text → imagestring(), imagettftext()

-   Destroy → imagedestroy()
