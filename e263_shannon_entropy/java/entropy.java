import java.util.HashMap;
import java.util.Map;

public class entropy {

    public static void main(String[] args) {
        System.out.println(shannonEntropy("122333444455555666666777777788888888)"));
        System.out.println(shannonEntropy("563881467447538846567288767728553786)"));
        System.out.println(shannonEntropy("https://www.reddit.com/r/dailyprogrammer)"));
        System.out.println(shannonEntropy("int main(int argc, char *argv[]))"));
    }

    public static double shannonEntropy(String input)
    {
        // Generate a map for freqency
        Map<Character, Double> map = new HashMap<Character, Double>();
        char[] chars = input.toCharArray();
        for (int index = 0; index < chars.length; index++) {
            map.putIfAbsent(chars[index], (double) 0);
            map.replace(chars[index], map.get(chars[index]) + 1);
        }

        // Apply the sum
        double entropy = 0;
        for (char c : map.keySet()) {
            entropy += (map.get(c) / input.length()) * (Math.log(map.get(c) / input.length()) / Math.log(2));
        }

        // negate the value
        entropy = entropy * -1;

        // round up to 5 decimal place
        entropy = (double)Math.round(entropy * 100000d) / 100000d

        return entropy;

    }
}