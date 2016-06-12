import java.util.*;

class Ord {
    public static void main(String[] args) {
        int position = Integer.parseInt(args[0]);
        int max = args.length > 1 ? Integer.parseInt(args[1]) + 1 : 101;

        ArrayList<String> result = new ArrayList<String>();
        for (int i = 1; i < max; i++) {
            String ord = "";
            if (i % 10 == 1) {
                ord = "st";
            } else if (i % 10 == 2) {
                ord = "nd";
            } else if (i % 10 == 3) {
                ord = "rd";
            } else {
                ord = "th";
            }

            //special case dealing with 11, 12 and 13
            if (i == 11 || i == 12 || i == 13) {
                ord = "th";
            }

            // exclude the position
            if (i != position) {
                result.add(i+ord);
            }
        }

        System.out.println(String.join(", ", result));
    }
}