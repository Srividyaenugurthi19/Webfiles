import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;
import java.io.*;
import java.util.List;
import java.util.ArrayList;
import java.util.List;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;
public class EmployeeSaxParser 
{
    public static void main(String argv[]) 
    {
        SAXParserFactory saxParserFactory = SAXParserFactory.newInstance();
         try 
        {
            SAXParser saxParser = saxParserFactory.newSAXParser();
            MyHandler handler = new MyHandler();
            int flag=0;
            saxParser.parse(new File("User1.xml"), handler);
            BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
            System.out.println("Enter User Id");
            String id=br.readLine();
            List<Employee> empList = handler.getEmpList(); 
            for(Employee emp : empList) 
            {
                if(emp.getId().equals(id))
                {
                    flag=1;
                    System.out.println(emp.getFirstName());
                    System.out.println(emp.getLastName());
                    System.out.println(emp.getLocation());
                }
            }
            if(flag==0)
            {
                 System.out.println("Employee with id = "+id+" dosen't exist ");
            }
        } 
        catch(Exception e) 
        {
            e.printStackTrace();
        }
    }
}
