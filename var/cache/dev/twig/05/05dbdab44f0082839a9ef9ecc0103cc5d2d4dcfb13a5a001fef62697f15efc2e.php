<?php

/* ESFEspaceAbonneBundle:Default:mesdemandes.html.twig */
class __TwigTemplate_64a1081f7a0470f0019c75d22c6b8f79f96b80623921bce43dd05580344a8e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesdemandes.html.twig", 1);
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
        $__internal_749218d2390af3173b387cfd9bb4092729f07e1f27afecec13f0b8c1bb4aef33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749218d2390af3173b387cfd9bb4092729f07e1f27afecec13f0b8c1bb4aef33->enter($__internal_749218d2390af3173b387cfd9bb4092729f07e1f27afecec13f0b8c1bb4aef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesdemandes.html.twig"));

        $__internal_4a29bbb15d3ba3ca735b3584893cf2b6ba2b156dcfe32dc3095078a554e2240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a29bbb15d3ba3ca735b3584893cf2b6ba2b156dcfe32dc3095078a554e2240c->enter($__internal_4a29bbb15d3ba3ca735b3584893cf2b6ba2b156dcfe32dc3095078a554e2240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749218d2390af3173b387cfd9bb4092729f07e1f27afecec13f0b8c1bb4aef33->leave($__internal_749218d2390af3173b387cfd9bb4092729f07e1f27afecec13f0b8c1bb4aef33_prof);

        
        $__internal_4a29bbb15d3ba3ca735b3584893cf2b6ba2b156dcfe32dc3095078a554e2240c->leave($__internal_4a29bbb15d3ba3ca735b3584893cf2b6ba2b156dcfe32dc3095078a554e2240c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b0bae21c97e5b7fe67b90c2dad04945c23aeed62df4846f7f10eb1f3b26bdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0bae21c97e5b7fe67b90c2dad04945c23aeed62df4846f7f10eb1f3b26bdb4->enter($__internal_3b0bae21c97e5b7fe67b90c2dad04945c23aeed62df4846f7f10eb1f3b26bdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9208b1b6207ac8aec80e8e9e1fa01e91e8aa8437fdfce385b867d3bd8bb1bb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9208b1b6207ac8aec80e8e9e1fa01e91e8aa8437fdfce385b867d3bd8bb1bb94->enter($__internal_9208b1b6207ac8aec80e8e9e1fa01e91e8aa8437fdfce385b867d3bd8bb1bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9208b1b6207ac8aec80e8e9e1fa01e91e8aa8437fdfce385b867d3bd8bb1bb94->leave($__internal_9208b1b6207ac8aec80e8e9e1fa01e91e8aa8437fdfce385b867d3bd8bb1bb94_prof);

        
        $__internal_3b0bae21c97e5b7fe67b90c2dad04945c23aeed62df4846f7f10eb1f3b26bdb4->leave($__internal_3b0bae21c97e5b7fe67b90c2dad04945c23aeed62df4846f7f10eb1f3b26bdb4_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_49d100563022366abbe632e25e610b447908fc0c7e3fe881848ede8511b8cb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d100563022366abbe632e25e610b447908fc0c7e3fe881848ede8511b8cb8c->enter($__internal_49d100563022366abbe632e25e610b447908fc0c7e3fe881848ede8511b8cb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_56fb93f1a924c3a233c329a58403222b9d20010f03d8c70cb11592544951c24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fb93f1a924c3a233c329a58403222b9d20010f03d8c70cb11592544951c24c->enter($__internal_56fb93f1a924c3a233c329a58403222b9d20010f03d8c70cb11592544951c24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_56fb93f1a924c3a233c329a58403222b9d20010f03d8c70cb11592544951c24c->leave($__internal_56fb93f1a924c3a233c329a58403222b9d20010f03d8c70cb11592544951c24c_prof);

        
        $__internal_49d100563022366abbe632e25e610b447908fc0c7e3fe881848ede8511b8cb8c->leave($__internal_49d100563022366abbe632e25e610b447908fc0c7e3fe881848ede8511b8cb8c_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4dbaf8b9eb101603f3cb427a50ad9e16271432009b39850dea9d3dd36ec7b9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbaf8b9eb101603f3cb427a50ad9e16271432009b39850dea9d3dd36ec7b9fb->enter($__internal_4dbaf8b9eb101603f3cb427a50ad9e16271432009b39850dea9d3dd36ec7b9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_92ffa1d45aa05a201a200f692e563005c267c1cdd799b9e3ea24e4e7ee40b9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ffa1d45aa05a201a200f692e563005c267c1cdd799b9e3ea24e4e7ee40b9a8->enter($__internal_92ffa1d45aa05a201a200f692e563005c267c1cdd799b9e3ea24e4e7ee40b9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
                                <div style=\"float:left;\">
                                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                        <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                    </a>
                                </div>
                                <div style=\"float:right;\">
                                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                        <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                    </a>
                                </div>                               
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                ";
        }
        // line 48
        echo "            </tbody>
        </table>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#demandeInsciption').DataTable( {
                responsive: true
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_92ffa1d45aa05a201a200f692e563005c267c1cdd799b9e3ea24e4e7ee40b9a8->leave($__internal_92ffa1d45aa05a201a200f692e563005c267c1cdd799b9e3ea24e4e7ee40b9a8_prof);

        
        $__internal_4dbaf8b9eb101603f3cb427a50ad9e16271432009b39850dea9d3dd36ec7b9fb->leave($__internal_4dbaf8b9eb101603f3cb427a50ad9e16271432009b39850dea9d3dd36ec7b9fb_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  158 => 47,  145 => 40,  137 => 35,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                                <div style=\"float:left;\">
                                    <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                        <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                    </a>
                                </div>
                                <div style=\"float:right;\">
                                    <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                        <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                    </a>
                                </div>                               
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#demandeInsciption').DataTable( {
                responsive: true
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}", "ESFEspaceAbonneBundle:Default:mesdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesdemandes.html.twig");
    }
}
