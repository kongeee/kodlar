package nLayeredDemo.core;

import nLayeredDemo.jLogger.JLoggerManager;

//Burada Adapter design pattern kullandik
//yani hazir gelen classin nesnesini burada olusturduk onun bir interface e bagli olmasini sagladik
public class JLoggerManagerAdapter implements LoggerService{
	@Override
	public void logToSystem(String message) {
		
		//bu kodda sadece paket kullanildi ekstra bir sey yapilmadi
		JLoggerManager jLoggerManager = new JLoggerManager();
		jLoggerManager.log(message);
		
		//Bu adimdan sonra da business icindeki ProductManager classina dependancy injection ile LoggerService eklenir
	}
}
