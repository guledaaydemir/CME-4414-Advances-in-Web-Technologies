using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccess
{
    class Connection
    {
        public static readonly SqlConnection Con = new SqlConnection("server=;database=UniversityDB;Trusted_Connection=true;MultipleActiveResultSets=True;");
    }
}
