import java.util.ArrayList;
import java.util.List;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;
public class MyHandler extends DefaultHandler 
{
    private List<Employee> empList = null;
    private Employee emp = null;
    public List<Employee> getEmpList() 
    {
        return empList;
    }
    boolean bfirstname = false;
    boolean blastname = false;
    boolean blocation = false;
    @Override
    public void startElement(String uri, String localName, String qName, Attributes attributes) throws SAXException 
    {
        if (qName.equalsIgnoreCase("Employee")) 
        {
            String id = attributes.getValue("id");
            emp = new Employee();
            emp.setId(id);
            if (empList == null)
            {
                empList = new ArrayList<>();
            }
        } 
        else if (qName.equalsIgnoreCase("firstname")) 
        {
            bfirstname = true;
        }
         else if (qName.equalsIgnoreCase("lastname")) 
        {
            blastname = true;
        }
        else if (qName.equalsIgnoreCase("location")) 
        {
            blocation = true;
        }
    }
    @Override
     public void endElement(String uri, String localName, String qName) throws SAXException 
    {
        if (qName.equalsIgnoreCase("Employee")) 
        {
            empList.add(emp);
        }
    }
    @Override
     public void characters(char ch[], int start, int length) throws SAXException 
    {
        if (bfirstname) 
        {
            emp.setFirstName(new String(ch, start, length));
            bfirstname = false;
         }
        else if (blastname) 
        {
            emp.setLastName(new String(ch, start, length));
            blastname = false;
        }
        else if (blocation) 
        {
            emp.setLocation(new String(ch, start, length));
            blocation = false;
        } 
    }
}
