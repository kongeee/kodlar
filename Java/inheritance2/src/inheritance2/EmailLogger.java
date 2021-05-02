package inheritance2;


//email loglama isi yapacak
public class EmailLogger extends Logger{
	@Override
	public void log() {
		System.out.println("email log");
	}

}
