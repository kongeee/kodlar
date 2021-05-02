package inheritance2;


//dosya loglamasi yapacak
public class FileLogger extends Logger {
	@Override
	public void log() {
		System.out.println("File log");
	}

}
