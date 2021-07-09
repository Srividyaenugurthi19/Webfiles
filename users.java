import java.io.File;
import javax.xml.parsers.*;
import org.w3c.dom.*;
import java.util.Scanner;
class Users
{
  public static void main(String args[]) throws Exception
  {
  DocumentBuilderFactory fac=DocumentBuilderFactory.newInstance();
  DocumentBuilder b=fac.newDocumentBuilder();
  Document doc=b.parse(new File("users.xml"));
  doc.getDocumentElement().normalize();
  Element root=doc.getDocumentElement();
  Scanner in=new Scanner(System.in);
  System.out.println("Enter User ID:");
  int n=in.nextInt();
  int flag=0;
  NodeList nl=doc.getElementsByTagName("user");
  for(int i=0;i<nl.getLength();i++)
  {
   Node node=nl.item(i);
   if(node.getNodeType()==Node.ELEMENT_NODE)
   {
    Element e=(Element)node;
    int x=Integer.parseInt(e.getElementsByTagName("id").item(0).getTextContent());
    if(x==n)
    { 
     System.out.println(root.getNodeName());
     System.out.println("user id: "+e.getElementsByTagName("id").item(0).getTextContent());
     System.out.println("user name: "+e.getElementsByTagName("name").item(0).getTextContent());
     System.out.println("user gender: "+e.getElementsByTagName("gender").item(0).getTextContent());
     System.out.println("user email: "+e.getElementsByTagName("email").item(0).getTextContent());
     System.out.println("user phoneno:"+e.getElementsByTagName("phoneno").item(0).getTextContent());
     System.out.println("user subject:"+e.getElementsByTagName("subject").item(0).getTextContent());
     flag=1;
     break;
    }
    else
     flag=0;
   }
 }
 if(flag==0)
   System.out.println("Invalid id!!");
 }
}