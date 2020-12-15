using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class Transferencia
    {
        public Transferencia()
        {
            Pago = new HashSet<Pago>();
        }

        public int IdTransferencia { get; set; }
        public Guid IdParte { get; set; }
        public string NumeroAutorizacion { get; set; }
        public string Folio { get; set; }
        public string UrlComprobante { get; set; }

        public virtual ICollection<Pago> Pago { get; set; }
    }
}
