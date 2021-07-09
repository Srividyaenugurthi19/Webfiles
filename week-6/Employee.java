public class Employee 
{
    private String id;
    private String firstname;
    private String lastname;
    private String location;
 
    public String getId() 
    {
        return id;
    }
    public void setId(String id) 
    {
        this.id = id;
    }
    public String getFirstName() 
    {
        return firstname;
    }
    public void setFirstName(String firstname) 
    {
        this.firstname = firstname;
    }
    public String getLastName() 
    {
        return lastname;
    }
    public void setLastName(String lastname) 
    {
        this.lastname = lastname;
    }
    public String getLocation() 
    {
        return location;
    }
    public void setLocation(String location) 
    {
        this.location = location;
    }
    @Override
    public String toString() 
    {
        return "Employee:: ID="+this.id+" First Name=" + this.firstname + " LastName=" + this.lastname + " location=" + this.location;
    }
 }
