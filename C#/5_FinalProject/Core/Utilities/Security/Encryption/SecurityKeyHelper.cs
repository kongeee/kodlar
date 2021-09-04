using Microsoft.IdentityModel.Tokens;
using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Security.Encryption {
    public class SecurityKeyHelper {

        //appsettings.json daki securitykey i byte array haline getirir ve anahtar üretir
        public static SecurityKey CreateSecurityKey(string securityKey) {
            return new SymmetricSecurityKey(Encoding.UTF8.GetBytes(securityKey));
        }
    }
}
