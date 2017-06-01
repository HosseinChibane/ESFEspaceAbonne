<?php

/* ESFEspaceAbonneBundle:back:langueTwo.html.twig */
class __TwigTemplate_a8e78b8750eb014acf9e2180774ef3e6c1c47bb2ad89ae97289459f4ec80228d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:langueTwo.html.twig", 1);
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
        $__internal_2befdb34d421d37138fdd5abd52231080ac3b2d48280222aaf348f79357c5edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2befdb34d421d37138fdd5abd52231080ac3b2d48280222aaf348f79357c5edf->enter($__internal_2befdb34d421d37138fdd5abd52231080ac3b2d48280222aaf348f79357c5edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $__internal_92a48ff2cd7033e8f4cf77c9a8401c16dc0f3dc8bbe5f68b3ecc52403c9010d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a48ff2cd7033e8f4cf77c9a8401c16dc0f3dc8bbe5f68b3ecc52403c9010d4->enter($__internal_92a48ff2cd7033e8f4cf77c9a8401c16dc0f3dc8bbe5f68b3ecc52403c9010d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2befdb34d421d37138fdd5abd52231080ac3b2d48280222aaf348f79357c5edf->leave($__internal_2befdb34d421d37138fdd5abd52231080ac3b2d48280222aaf348f79357c5edf_prof);

        
        $__internal_92a48ff2cd7033e8f4cf77c9a8401c16dc0f3dc8bbe5f68b3ecc52403c9010d4->leave($__internal_92a48ff2cd7033e8f4cf77c9a8401c16dc0f3dc8bbe5f68b3ecc52403c9010d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3978a272c13da5a9afbe3b701400ce2c6b759ee408f121205fa72f4201e5c69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3978a272c13da5a9afbe3b701400ce2c6b759ee408f121205fa72f4201e5c69e->enter($__internal_3978a272c13da5a9afbe3b701400ce2c6b759ee408f121205fa72f4201e5c69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fda3623604fbd7d5573a8f283d60a2c171d29c5667c6d9c6ca2eb4d74b4cd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fda3623604fbd7d5573a8f283d60a2c171d29c5667c6d9c6ca2eb4d74b4cd1a->enter($__internal_2fda3623604fbd7d5573a8f283d60a2c171d29c5667c6d9c6ca2eb4d74b4cd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2fda3623604fbd7d5573a8f283d60a2c171d29c5667c6d9c6ca2eb4d74b4cd1a->leave($__internal_2fda3623604fbd7d5573a8f283d60a2c171d29c5667c6d9c6ca2eb4d74b4cd1a_prof);

        
        $__internal_3978a272c13da5a9afbe3b701400ce2c6b759ee408f121205fa72f4201e5c69e->leave($__internal_3978a272c13da5a9afbe3b701400ce2c6b759ee408f121205fa72f4201e5c69e_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_914854bbf35a0bfafe3c454cec56e586c68c11d458834c4aa8713b050502e92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914854bbf35a0bfafe3c454cec56e586c68c11d458834c4aa8713b050502e92d->enter($__internal_914854bbf35a0bfafe3c454cec56e586c68c11d458834c4aa8713b050502e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_05c6cf3db1c44bb333424be85a3f7906dc6597c365e13f76a2d895165b0e514e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c6cf3db1c44bb333424be85a3f7906dc6597c365e13f76a2d895165b0e514e->enter($__internal_05c6cf3db1c44bb333424be85a3f7906dc6597c365e13f76a2d895165b0e514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsThree");
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
        
        $__internal_05c6cf3db1c44bb333424be85a3f7906dc6597c365e13f76a2d895165b0e514e->leave($__internal_05c6cf3db1c44bb333424be85a3f7906dc6597c365e13f76a2d895165b0e514e_prof);

        
        $__internal_914854bbf35a0bfafe3c454cec56e586c68c11d458834c4aa8713b050502e92d->leave($__internal_914854bbf35a0bfafe3c454cec56e586c68c11d458834c4aa8713b050502e92d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:langueTwo.html.twig";
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
    Inscription Langue - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_langueStepsThree') }}\">Suivant</a>
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
#}", "ESFEspaceAbonneBundle:back:langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/langueTwo.html.twig");
    }
}
