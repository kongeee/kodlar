package ilkDers;

public class c5_variableTypes {
    public static void main(String[] args) {
        //javada değer tip ve referans tip diye iki türlü veri tipi grubu vardır. int gibi değişeken türleri değer tip iken, diziler referans tiptir.

        int number1 = 5;
        int number2 = 10;
        number1 = number2;
        number2 = 333;
        System.out.println(number1); //TODO : değer tip olduğu için adreslerle değil sadece değerlerle ilgileniyoruz

        //**************************************************************************

        int[] arr1 = {1,2,3,4};
        int[] arr2 = {10,20,30,40};
        arr1 = arr2;
        arr2[0] = 105;
        System.out.println(arr1[0]); //TODO : referans tip olduğu için arr1 = arr2 diyince arr1 artık arr2 nin referansını tutuyor. Bundan dolayı arr2 de yapılan değişiklik her ikisi için de etkilidir. (arr1 in önceki tuttuğu alan Garbage Collector ile toplanır)

        //***************************************************************************

        //Burada istisnai bir durum vardır.
        String city1 = "Adana";
        String city2 = "İstanbul";
        city1 = city2;
        city2 = "Mersin";
        System.out.print(city1); //!normalde string bir char arraydir ama burada değer tip olarak aktarildı

    }
}
