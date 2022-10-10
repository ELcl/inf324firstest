using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Data;
using System.Data.SqlClient;

namespace Visual_Servicio
{
    /// <summary>
    /// Descripción breve de WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {

      
        [WebMethod]
        public DataSet datos_alumno()
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=DESKTOP-8UKECFA\\SQLEXPRESS;user=inf324;pwd=123456;database=mibase_efraincallizaya";
            
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = "select * from acceso";
            ada.SelectCommand.CommandType = CommandType.Text;
            DataSet ds = new DataSet();
            ada.Fill(ds);
            return ds;
        }

        [WebMethod]
        public void insertar()
        {
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = "server=DESKTOP-8UKECFA\\SQLEXPRESS;user=inf324;pwd=123456;database=mibase_efraincallizaya";
            con.Open();
            cmd.Connection = con;
            cmd.CommandText = "insert into acceso values ('555','director','123')";
            cmd.ExecuteNonQuery();
            con.Close();
        }
        [WebMethod]
        public void delete() { 
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = "server=DESKTOP-8UKECFA\\SQLEXPRESS;user=inf324;pwd=123456;database=mibase_efraincallizaya";
            con.Open();
            cmd.Connection = con;
            cmd.CommandText = "DELETE FROM acceso WHERE ci = 555";
            cmd.ExecuteNonQuery();
            con.Close();
        }
        [WebMethod]
        public void update() {
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = "server=DESKTOP-8UKECFA\\SQLEXPRESS;user=inf324;pwd=123456;database=mibase_efraincallizaya";
            con.Open();
            cmd.Connection = con;
            cmd.CommandText = "UPDATE acceso SET usuario='director' WHERE ci=555";
            cmd.ExecuteNonQuery();
        }
    }
}
