using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Security.Hashing {
    public class HashingHelper {

        //Şifresi hashle
        public static void CreatePasswordHash(string password, out byte[] passwordHash, out byte[] passwordSalt) {
            using (var hmac = new System.Security.Cryptography.HMACSHA512()) {
                passwordSalt = hmac.Key;//salt
                passwordHash = hmac.ComputeHash(Encoding.UTF8.GetBytes(password));//stringi byte a çevirip hashledik

            }
        }

        //şifre doğrulaması
        public static bool VerifyPasswordHash(string password, byte[] passwordHash, byte[] passwordSalt) {
            using (var hmac = new System.Security.Cryptography.HMACSHA512(passwordSalt)) {

                var ComputedHash = hmac.ComputeHash(Encoding.UTF8.GetBytes(password));//kullanıcının girdiği şifre
                for (int i = 0; i < ComputedHash.Length; i++) {
                    if (ComputedHash[i] != passwordHash[i]) {//ikisi de byte array. Eğer DB deki ile sistemdekinin bir byte i bile eşleşmezse
                        return false;
                    }
                }
                return true;
            }
            

        }
    }
}
