using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using LogicLayer;
using DataAccess;

namespace WebApplicationUniversity
{
    public partial class Student : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            GridViewStudent.DataSource = LogicLayer.Student.GetAllStudents();
            GridViewStudent.DataBind();
        
        }

        protected void ButtonGetStudent_Click(object sender, EventArgs e)
        {
            ......
			......
        }


    }
}