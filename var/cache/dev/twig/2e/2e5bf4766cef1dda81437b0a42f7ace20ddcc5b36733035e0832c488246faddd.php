<?php

/* ESFEspaceAbonneBundle:Default:mesDemandes.html.twig */
class __TwigTemplate_1d162f5aec46a33dfdb9b93960f6f2cbe0ce2f71a7aec5166b1b9a0efa83e94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesDemandes.html.twig", 1);
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
        $__internal_9cec70fa3626ddcea15386d5ff36e75817db1d31b3dfdbdb6deced362f384b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cec70fa3626ddcea15386d5ff36e75817db1d31b3dfdbdb6deced362f384b4f->enter($__internal_9cec70fa3626ddcea15386d5ff36e75817db1d31b3dfdbdb6deced362f384b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesDemandes.html.twig"));

        $__internal_ffdc601f3d8acf8a52bce4bf906eec2c3152c557271b296adfef32ef8db90e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdc601f3d8acf8a52bce4bf906eec2c3152c557271b296adfef32ef8db90e07->enter($__internal_ffdc601f3d8acf8a52bce4bf906eec2c3152c557271b296adfef32ef8db90e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cec70fa3626ddcea15386d5ff36e75817db1d31b3dfdbdb6deced362f384b4f->leave($__internal_9cec70fa3626ddcea15386d5ff36e75817db1d31b3dfdbdb6deced362f384b4f_prof);

        
        $__internal_ffdc601f3d8acf8a52bce4bf906eec2c3152c557271b296adfef32ef8db90e07->leave($__internal_ffdc601f3d8acf8a52bce4bf906eec2c3152c557271b296adfef32ef8db90e07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_847f9aac44cb1b398dfeeb35aa6d9902ba78654b4693666388e64846320116ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847f9aac44cb1b398dfeeb35aa6d9902ba78654b4693666388e64846320116ad->enter($__internal_847f9aac44cb1b398dfeeb35aa6d9902ba78654b4693666388e64846320116ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69271baba5d68dfa86a0ff701050f489192a93d83b6bca5b34cf787ddc9e638a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69271baba5d68dfa86a0ff701050f489192a93d83b6bca5b34cf787ddc9e638a->enter($__internal_69271baba5d68dfa86a0ff701050f489192a93d83b6bca5b34cf787ddc9e638a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_69271baba5d68dfa86a0ff701050f489192a93d83b6bca5b34cf787ddc9e638a->leave($__internal_69271baba5d68dfa86a0ff701050f489192a93d83b6bca5b34cf787ddc9e638a_prof);

        
        $__internal_847f9aac44cb1b398dfeeb35aa6d9902ba78654b4693666388e64846320116ad->leave($__internal_847f9aac44cb1b398dfeeb35aa6d9902ba78654b4693666388e64846320116ad_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_045022de978f7810a60bff7f3a16f3b7619eeb3d6057739a42e8d0d0c8da9780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045022de978f7810a60bff7f3a16f3b7619eeb3d6057739a42e8d0d0c8da9780->enter($__internal_045022de978f7810a60bff7f3a16f3b7619eeb3d6057739a42e8d0d0c8da9780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7fa6cf77ea3123f24be47237ebaf72ad08b741caa942fb7a854b47f6c1f2ae2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa6cf77ea3123f24be47237ebaf72ad08b741caa942fb7a854b47f6c1f2ae2c->enter($__internal_7fa6cf77ea3123f24be47237ebaf72ad08b741caa942fb7a854b47f6c1f2ae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_7fa6cf77ea3123f24be47237ebaf72ad08b741caa942fb7a854b47f6c1f2ae2c->leave($__internal_7fa6cf77ea3123f24be47237ebaf72ad08b741caa942fb7a854b47f6c1f2ae2c_prof);

        
        $__internal_045022de978f7810a60bff7f3a16f3b7619eeb3d6057739a42e8d0d0c8da9780->leave($__internal_045022de978f7810a60bff7f3a16f3b7619eeb3d6057739a42e8d0d0c8da9780_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_660e5d29167423f42345f63c3bb7e78b5a41a86d509a99b2ddfddb305f5f8222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660e5d29167423f42345f63c3bb7e78b5a41a86d509a99b2ddfddb305f5f8222->enter($__internal_660e5d29167423f42345f63c3bb7e78b5a41a86d509a99b2ddfddb305f5f8222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b2dea88f04fb67fbb5df0b4dbfae77a54c04a42ba8b9bc7a9c38d822fd8b3734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dea88f04fb67fbb5df0b4dbfae77a54c04a42ba8b9bc7a9c38d822fd8b3734->enter($__internal_b2dea88f04fb67fbb5df0b4dbfae77a54c04a42ba8b9bc7a9c38d822fd8b3734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b2dea88f04fb67fbb5df0b4dbfae77a54c04a42ba8b9bc7a9c38d822fd8b3734->leave($__internal_b2dea88f04fb67fbb5df0b4dbfae77a54c04a42ba8b9bc7a9c38d822fd8b3734_prof);

        
        $__internal_660e5d29167423f42345f63c3bb7e78b5a41a86d509a99b2ddfddb305f5f8222->leave($__internal_660e5d29167423f42345f63c3bb7e78b5a41a86d509a99b2ddfddb305f5f8222_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesDemandes.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Default:mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesDemandes.html.twig");
    }
}
