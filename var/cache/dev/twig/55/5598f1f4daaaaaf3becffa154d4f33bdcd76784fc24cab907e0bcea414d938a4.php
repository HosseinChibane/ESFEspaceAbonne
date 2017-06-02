<?php

/* ESFEspaceAbonneBundle:back:mesDemandes.html.twig */
class __TwigTemplate_3f25f0c45b6adf79564611a7fe1f538dc0e7a7e2a38f1d2ef0f6cbf04c76f044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa6b52b03c172f572178ac8f553796fb6551a89ca21d8ea83ebc7f4a5454355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa6b52b03c172f572178ac8f553796fb6551a89ca21d8ea83ebc7f4a5454355->enter($__internal_7aa6b52b03c172f572178ac8f553796fb6551a89ca21d8ea83ebc7f4a5454355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $__internal_834552a4acbe5425dd63046a20e48ddab6994feeffd22bb49b6d9286dcfd6804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834552a4acbe5425dd63046a20e48ddab6994feeffd22bb49b6d9286dcfd6804->enter($__internal_834552a4acbe5425dd63046a20e48ddab6994feeffd22bb49b6d9286dcfd6804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa6b52b03c172f572178ac8f553796fb6551a89ca21d8ea83ebc7f4a5454355->leave($__internal_7aa6b52b03c172f572178ac8f553796fb6551a89ca21d8ea83ebc7f4a5454355_prof);

        
        $__internal_834552a4acbe5425dd63046a20e48ddab6994feeffd22bb49b6d9286dcfd6804->leave($__internal_834552a4acbe5425dd63046a20e48ddab6994feeffd22bb49b6d9286dcfd6804_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4376827140242b9da15e069e74fc92375ee72f373c2d252913e669aff8b00cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4376827140242b9da15e069e74fc92375ee72f373c2d252913e669aff8b00cb3->enter($__internal_4376827140242b9da15e069e74fc92375ee72f373c2d252913e669aff8b00cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_442371b0cd3f646760a1f53547e8313753023ae72b6ff4603796b6bb448d7e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442371b0cd3f646760a1f53547e8313753023ae72b6ff4603796b6bb448d7e9d->enter($__internal_442371b0cd3f646760a1f53547e8313753023ae72b6ff4603796b6bb448d7e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_442371b0cd3f646760a1f53547e8313753023ae72b6ff4603796b6bb448d7e9d->leave($__internal_442371b0cd3f646760a1f53547e8313753023ae72b6ff4603796b6bb448d7e9d_prof);

        
        $__internal_4376827140242b9da15e069e74fc92375ee72f373c2d252913e669aff8b00cb3->leave($__internal_4376827140242b9da15e069e74fc92375ee72f373c2d252913e669aff8b00cb3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_825de0035b28d67d7d3415e20f4b94918c29febd1de045ec3db871fd1f712c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825de0035b28d67d7d3415e20f4b94918c29febd1de045ec3db871fd1f712c75->enter($__internal_825de0035b28d67d7d3415e20f4b94918c29febd1de045ec3db871fd1f712c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a01c7857e45575b994f7c5e8c731245e283f56ad646e12cec2fc8de44eb58c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01c7857e45575b994f7c5e8c731245e283f56ad646e12cec2fc8de44eb58c8b->enter($__internal_a01c7857e45575b994f7c5e8c731245e283f56ad646e12cec2fc8de44eb58c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_a01c7857e45575b994f7c5e8c731245e283f56ad646e12cec2fc8de44eb58c8b->leave($__internal_a01c7857e45575b994f7c5e8c731245e283f56ad646e12cec2fc8de44eb58c8b_prof);

        
        $__internal_825de0035b28d67d7d3415e20f4b94918c29febd1de045ec3db871fd1f712c75->leave($__internal_825de0035b28d67d7d3415e20f4b94918c29febd1de045ec3db871fd1f712c75_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_cc80a13d3744ceb326dc52f6c8e269b43c06f76eecd485f1d5cbc44e46ee9833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc80a13d3744ceb326dc52f6c8e269b43c06f76eecd485f1d5cbc44e46ee9833->enter($__internal_cc80a13d3744ceb326dc52f6c8e269b43c06f76eecd485f1d5cbc44e46ee9833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_718dd7836045750fc42549e4a02f871745207415da1fa3f5261ae3cc88a9706d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718dd7836045750fc42549e4a02f871745207415da1fa3f5261ae3cc88a9706d->enter($__internal_718dd7836045750fc42549e4a02f871745207415da1fa3f5261ae3cc88a9706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        if (array_key_exists("listDemandeInscription", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listDemandeInscription"] ?? $this->getContext($context, "listDemandeInscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowDemande"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "etat", array()), "html", null, true);
                echo "</td>
                            <td>           
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
";
        
        $__internal_718dd7836045750fc42549e4a02f871745207415da1fa3f5261ae3cc88a9706d->leave($__internal_718dd7836045750fc42549e4a02f871745207415da1fa3f5261ae3cc88a9706d_prof);

        
        $__internal_cc80a13d3744ceb326dc52f6c8e269b43c06f76eecd485f1d5cbc44e46ee9833->leave($__internal_cc80a13d3744ceb326dc52f6c8e269b43c06f76eecd485f1d5cbc44e46ee9833_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 43,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Mes Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% if listDemandeInscription is defined %}
                    {% for rowDemande in listDemandeInscription %}
                        <tr>
                            <td>{{rowDemande.id}}</td>
                            <td>{{rowDemande.type}}</td>
                            <td>{{rowDemande.etat}}</td>
                            <td>           
                                <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
{% endblock %}", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesDemandes.html.twig");
    }
}
