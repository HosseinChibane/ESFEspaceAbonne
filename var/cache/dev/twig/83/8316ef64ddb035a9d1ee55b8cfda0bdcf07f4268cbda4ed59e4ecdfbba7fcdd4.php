<?php

/* ESFEspaceAbonneBundle:Back:universiteTwo.html.twig */
class __TwigTemplate_5960fc782df3d10f142134805930cd409334a9fa8a395f3269bd754aa7632f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig", 1);
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
        $__internal_76611417dc13f559fdbb2125789d8f519fef430d1721a0087310058badc1d953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76611417dc13f559fdbb2125789d8f519fef430d1721a0087310058badc1d953->enter($__internal_76611417dc13f559fdbb2125789d8f519fef430d1721a0087310058badc1d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig"));

        $__internal_84fc768a41d5270d35ac958cd2bcf6dca4b7e9c2bc723cb0ee42558c3338a768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fc768a41d5270d35ac958cd2bcf6dca4b7e9c2bc723cb0ee42558c3338a768->enter($__internal_84fc768a41d5270d35ac958cd2bcf6dca4b7e9c2bc723cb0ee42558c3338a768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76611417dc13f559fdbb2125789d8f519fef430d1721a0087310058badc1d953->leave($__internal_76611417dc13f559fdbb2125789d8f519fef430d1721a0087310058badc1d953_prof);

        
        $__internal_84fc768a41d5270d35ac958cd2bcf6dca4b7e9c2bc723cb0ee42558c3338a768->leave($__internal_84fc768a41d5270d35ac958cd2bcf6dca4b7e9c2bc723cb0ee42558c3338a768_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55d1d67c39de8991a1141d422b8e4f2f4164a1fcd126e8943ddcbcea2691aa24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d1d67c39de8991a1141d422b8e4f2f4164a1fcd126e8943ddcbcea2691aa24->enter($__internal_55d1d67c39de8991a1141d422b8e4f2f4164a1fcd126e8943ddcbcea2691aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f03a6b44fbf73cced3cf125bfbf7309e4210cc941076159b2e4e535a82421af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03a6b44fbf73cced3cf125bfbf7309e4210cc941076159b2e4e535a82421af2->enter($__internal_f03a6b44fbf73cced3cf125bfbf7309e4210cc941076159b2e4e535a82421af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f03a6b44fbf73cced3cf125bfbf7309e4210cc941076159b2e4e535a82421af2->leave($__internal_f03a6b44fbf73cced3cf125bfbf7309e4210cc941076159b2e4e535a82421af2_prof);

        
        $__internal_55d1d67c39de8991a1141d422b8e4f2f4164a1fcd126e8943ddcbcea2691aa24->leave($__internal_55d1d67c39de8991a1141d422b8e4f2f4164a1fcd126e8943ddcbcea2691aa24_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_75792d8ceb88a5cddaa4073fda0d27dc4b6cbe41e9383d6f7f1b57c70a4d5522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75792d8ceb88a5cddaa4073fda0d27dc4b6cbe41e9383d6f7f1b57c70a4d5522->enter($__internal_75792d8ceb88a5cddaa4073fda0d27dc4b6cbe41e9383d6f7f1b57c70a4d5522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2a452811e55f00da393f876ed187dbf8f7bc59de32f1bee2fc089f220960ff54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a452811e55f00da393f876ed187dbf8f7bc59de32f1bee2fc089f220960ff54->enter($__internal_2a452811e55f00da393f876ed187dbf8f7bc59de32f1bee2fc089f220960ff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">                                        
                       Rappel : Inscription à \"";
            // line 14
            echo twig_escape_filter($this->env, ($context["nometablissement"] ?? $this->getContext($context, "nometablissement")), "html", null, true);
            echo "\" pour suivre la formation de ";
            echo twig_escape_filter($this->env, ($context["formation"] ?? $this->getContext($context, "formation")), "html", null, true);
            echo ", en  ";
            echo twig_escape_filter($this->env, ($context["langue"] ?? $this->getContext($context, "langue")), "html", null, true);
            echo ".
                    </div>
                </div>              
                <p>Veuillez télécharger le(s) PDF ci-dessous et le(s) imprimer afin de nous le(s) renvoyer.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                            <tr>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsTwo");
            echo "\">Suivant</a>
            ";
        }
        // line 39
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
        
        $__internal_2a452811e55f00da393f876ed187dbf8f7bc59de32f1bee2fc089f220960ff54->leave($__internal_2a452811e55f00da393f876ed187dbf8f7bc59de32f1bee2fc089f220960ff54_prof);

        
        $__internal_75792d8ceb88a5cddaa4073fda0d27dc4b6cbe41e9383d6f7f1b57c70a4d5522->leave($__internal_75792d8ceb88a5cddaa4073fda0d27dc4b6cbe41e9383d6f7f1b57c70a4d5522_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 39,  132 => 37,  128 => 36,  124 => 34,  114 => 30,  109 => 28,  106 => 27,  102 => 26,  83 => 14,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Inscription Université - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">                                        
                       Rappel : Inscription à \"{{ nometablissement }}\" pour suivre la formation de {{ formation }}, en  {{ langue }}.
                    </div>
                </div>              
                <p>Veuillez télécharger le(s) PDF ci-dessous et le(s) imprimer afin de nous le(s) renvoyer.</p>      
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_universiteStepsTwo') }}\">Suivant</a>
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
#}", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteTwo.html.twig");
    }
}
