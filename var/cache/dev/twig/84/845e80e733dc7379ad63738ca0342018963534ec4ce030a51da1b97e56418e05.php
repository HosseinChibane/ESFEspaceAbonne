<?php

/* ESFEspaceAbonneBundle:Default:preparationTwo.html.twig */
class __TwigTemplate_f4c1c7a8612a3e76808c0b86e6aa6f3e2e5f4e07abafe7b835dcdecf03d9cc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:preparationTwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90b4d5be60d734800e076fb53d96922cb83984f128b330fddcf1b1493f7a36cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b4d5be60d734800e076fb53d96922cb83984f128b330fddcf1b1493f7a36cc->enter($__internal_90b4d5be60d734800e076fb53d96922cb83984f128b330fddcf1b1493f7a36cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:preparationTwo.html.twig"));

        $__internal_87b86360fac9883f3b2c3f11fcd76267c78562c54aa9b6391b105f57f4f2dc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b86360fac9883f3b2c3f11fcd76267c78562c54aa9b6391b105f57f4f2dc26->enter($__internal_87b86360fac9883f3b2c3f11fcd76267c78562c54aa9b6391b105f57f4f2dc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90b4d5be60d734800e076fb53d96922cb83984f128b330fddcf1b1493f7a36cc->leave($__internal_90b4d5be60d734800e076fb53d96922cb83984f128b330fddcf1b1493f7a36cc_prof);

        
        $__internal_87b86360fac9883f3b2c3f11fcd76267c78562c54aa9b6391b105f57f4f2dc26->leave($__internal_87b86360fac9883f3b2c3f11fcd76267c78562c54aa9b6391b105f57f4f2dc26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84591e463305ea911bcf72a722e34a74a1b1ebaedbc7a26bf7634fef7b895844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84591e463305ea911bcf72a722e34a74a1b1ebaedbc7a26bf7634fef7b895844->enter($__internal_84591e463305ea911bcf72a722e34a74a1b1ebaedbc7a26bf7634fef7b895844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2c52d8a6e97fadd023825bc73ba60aa4dbce3fdb7d38aba8ec78e678cb24604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c52d8a6e97fadd023825bc73ba60aa4dbce3fdb7d38aba8ec78e678cb24604->enter($__internal_b2c52d8a6e97fadd023825bc73ba60aa4dbce3fdb7d38aba8ec78e678cb24604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b2c52d8a6e97fadd023825bc73ba60aa4dbce3fdb7d38aba8ec78e678cb24604->leave($__internal_b2c52d8a6e97fadd023825bc73ba60aa4dbce3fdb7d38aba8ec78e678cb24604_prof);

        
        $__internal_84591e463305ea911bcf72a722e34a74a1b1ebaedbc7a26bf7634fef7b895844->leave($__internal_84591e463305ea911bcf72a722e34a74a1b1ebaedbc7a26bf7634fef7b895844_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2be65603e57592ab6f4eb6220dadc50edb500890b7a4511446464ac85b31d893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be65603e57592ab6f4eb6220dadc50edb500890b7a4511446464ac85b31d893->enter($__internal_2be65603e57592ab6f4eb6220dadc50edb500890b7a4511446464ac85b31d893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_88b3f13c0f4bb18e563f8895b9917ca444da990915548300dc1c4b82e494850b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b3f13c0f4bb18e563f8895b9917ca444da990915548300dc1c4b82e494850b->enter($__internal_88b3f13c0f4bb18e563f8895b9917ca444da990915548300dc1c4b82e494850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <tr>
                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsTwo");
            echo "\">Suivant</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_88b3f13c0f4bb18e563f8895b9917ca444da990915548300dc1c4b82e494850b->leave($__internal_88b3f13c0f4bb18e563f8895b9917ca444da990915548300dc1c4b82e494850b_prof);

        
        $__internal_2be65603e57592ab6f4eb6220dadc50edb500890b7a4511446464ac85b31d893->leave($__internal_2be65603e57592ab6f4eb6220dadc50edb500890b7a4511446464ac85b31d893_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:preparationTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  120 => 32,  116 => 31,  112 => 29,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Inscription Préparation - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in document %}
                            <tr>
                                <td>{{ item.pdfName }}</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_preparationStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_preparationStepsTwo') }}\">Suivant</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}

{#                OK mais moche                
<img src=\"{{ vich_uploader_asset(item, 'pdfFile') }}\" alt=\"{{ item.pdfName }}\" />
#}", "ESFEspaceAbonneBundle:Default:preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/preparationTwo.html.twig");
    }
}
