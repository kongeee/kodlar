package ilkDers;

public class c4_loops {

	public static void main(String[] args) {
		String[] names ={
			"Furkan",
			"Büşra",
			"Eren",
			"Fadime",

		};

        //foreach
        for(String name : names){
            System.out.println(name);
        }
        System.out.println("*********************************");

        //classic for loop
        for(int i=0; i<names.length; i++){
            System.out.println(names[i]);
        }


	}

}
