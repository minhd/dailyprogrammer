import java.util.*;
import java.lang.*;
import java.io.*;

class Transpose
{
    public static void main (String[] args) throws java.lang.Exception
    {
        ArrayList<String> lines = new ArrayList<>();
        BufferedReader br = new BufferedReader(new FileReader(new File(args[0])));
        String in;
        int maxLength = 0;

        // Read the file into lines and determine the maxLength
        while ((in = br.readLine()) != null) {
            maxLength = (in.length() > maxLength) ? in.length() : maxLength;
            if (in.isEmpty()) {
                lines.add(" ");
            } else {
                lines.add(in);
            }
        }

        // Transpose
        ArrayList<String> result = new ArrayList<>();
        for (int i = 0; i < maxLength; i++) {
            String transposed = "";
            for (String line : lines) {
                transposed += (i < line.length() ? line.charAt(i) : ' ');
            }
            result.add(transposed.replaceAll("\\s+$", ""));
        }

        // Print Result
        for (String line: result) {
            System.out.println(line);
        }
    }
}