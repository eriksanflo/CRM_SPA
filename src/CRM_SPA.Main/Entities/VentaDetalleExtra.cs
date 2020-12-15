using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class VentaDetalleExtra
    {
        public int IdVentaDetalleExtra { get; set; }
        public int IdVentaDetalle { get; set; }
        public string Descripcion { get; set; }

        public virtual VentaDetalle IdVentaDetalleNavigation { get; set; }
    }
}
