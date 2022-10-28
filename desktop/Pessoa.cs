using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySqlConnector;

namespace Projeto
{
    class Pessoa
    {
        public int Id { get; set; }
        public string nome { get; set; }
        public string idade { get; set; }
        public string celular { get; set; }

        MySqlConnection con = new MySqlConnection("server=sql.freedb.tech;port=3306;database=freedb_testemulti;user id=freedb_abc321973;password=t8PtvCFeR3s?69r;charset=utf8");

        public List<Pessoa> listapessoa()
        {
            List<Pessoa> li = new List<Pessoa>();
            string sql = "SELECT * FROM pessoa";
            con.Open();
            MySqlCommand cmd = new MySqlCommand(sql, con);
            MySqlDataReader dr = cmd.ExecuteReader();
            while (dr.Read())
            {
                Pessoa p = new Pessoa();
                p.Id = (int)dr["id"];
                p.nome = dr["nome"].ToString();
                p.idade = dr["idade"].ToString();
                p.celular = dr["celular"].ToString();
                li.Add(p);
            }
            dr.Close();
            con.Close();
            return li;
        }

        public void Inserir(string nome, string idade, string celular)
        {
            string sql = "INSERT INTO pessoa(nome,idade,celular) VALUES ('"+nome+"','"+idade+"','"+celular+"')";
            con.Open();
            MySqlCommand cmd = new MySqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            con.Close();
        }

        public void Atualizar(int Id, string nome, string idade, string celular)
        {
            string sql = "UPDATE pessoa SET nome='"+nome+"',idade='"+idade+"',celular='"+celular+"' WHERE id='"+Id+"'";
            con.Open();
            MySqlCommand cmd = new MySqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            con.Close();
        }

        public void Excluir(int Id)
        {
            string sql = "DELETE FROM pessoa WHERE id='"+Id+"'";
            con.Open();
            MySqlCommand cmd = new MySqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            con.Close();
        }

        public void Localizar(int Id)
        {
           string sql = "SELECT * FROM pessoa WHERE id='"+Id+"'";
            con.Open();
            MySqlCommand cmd = new MySqlCommand(sql, con);
            MySqlDataReader dr = cmd.ExecuteReader();
            while (dr.Read())
            {
                nome = dr["nome"].ToString();
                idade = dr["idade"].ToString();
                celular = dr["celular"].ToString();
            }
            dr.Close();
            con.Close();
        }

        public bool RegistroRepetido(string nome, string idade, string celular)
        {
            string sql = "SELECT * FROM pessoa WHERE nome='"+nome+"' AND idade='"+idade+"' AND celular='"+celular+"'";
            MySqlCommand cmd = new MySqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            var result = cmd.ExecuteScalar();
            if (result != null)
            {
                return (int)result > 0;
            }
            con.Close();
            return false;
        }
    }
}
