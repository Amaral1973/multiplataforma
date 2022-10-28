using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Projeto
{
    public partial class FrmPessoa : Form
    {
        public FrmPessoa()
        {
            InitializeComponent();
        }

        private void FrmPessoa_Load(object sender, EventArgs e)
        {
            Pessoa pessoa = new Pessoa();
            List<Pessoa> pessoas = pessoa.listapessoa();
            dgvPessoa.DataSource = pessoas;
            btnEditar.Enabled = false;
            btnExcluir.Enabled = false;
        }
    }
}
