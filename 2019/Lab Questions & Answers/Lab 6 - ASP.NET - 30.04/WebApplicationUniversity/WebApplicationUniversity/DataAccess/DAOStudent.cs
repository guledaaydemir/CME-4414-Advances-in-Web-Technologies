using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccess
{
    public class DAOStudent
    {
        public static List<EStudent> GetAllStudents()
        {
            List<EStudent> list = null;
            SqlCommand com = new SqlCommand("SP_SelectStudent", Connection.Con);

            if (com.Connection.State == ConnectionState.Closed)
            {
                com.Connection.Open();
            }

            SqlDataReader rd = com.ExecuteReader();
            if (rd.HasRows)
            {
                list = new List<EStudent>();
                while (rd.Read())
                {
                    EStudent student = (new EStudent
                    {
                        Id = Convert.ToInt32(rd["studentID"]),
                        Name = rd["studentName"].ToString(),
                        SurName = rd["studentSurName"].ToString(),
                        School = rd["School"].ToString(),
                        Birthday = rd["birthdayDate"].ToString()
                    });
                    list.Add(student);
                }
            }
            com.Dispose();
            com.Connection.Close();
            return list;
        }

        public static EStudent SelectStudentById(int id)
        {
            ......
			......
			......

            return null;
        }
    }
}
