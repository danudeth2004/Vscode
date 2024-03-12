package Java;

import java.util.Arrays;

public class Grader {
    public String name;
    public String desc;
    public int[] pts;
    public String[] sols;
    public Grader(String n,String d,int[] s,String[] a){
       name = n;
       desc = d;
       pts = s;
       sols = a;
    }
    public Grader copyOf(Grader g){
        int[] copypts = Arrays.copyOf(g.pts, g.pts.length);
        String[] copysols = Arrays.copyOf(g.sols, g.sols.length);
        return new Grader(name, desc, copypts, copysols);
    }
}

public class Grader1NewArrayCopy {
    public static void main(String[] args) {
        int[] pts = {5, 5, 5, 10, 10};
        String[] sols = {"Java", "C", "Python", "PHP", "R"};
        Grader gr = new Grader("Vote", "Count ballots", pts, sols);
        System.out.println(gr.name);
        System.out.println(gr.desc);
        System.out.println(gr.pts[4]);
        System.out.println(gr.sols[4]);

        pts[3] = 7;
        sols[4] = "Kotlin";
        System.out.println(gr.pts[3]);
        System.out.println(gr.sols[4]);
    }
}
