using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DataAccess;

namespace LogicLayer
{
    public class Student
    {
        public static List<EStudent> GetAllStudents()
        {
            return DAOStudent.GetAllStudents();
        }

        public static EStudent SelectStudent(int id)
        {
            if (id > 0)
                ........
            else
                return null;
        }
    }
}
