<?php

/* @ESFEspaceAbonne/Default/langueTwo.html.twig */
class __TwigTemplate_180ed8c03fdb0ed72d961cb85922a7ee033b0ee59ce3ffac3f6ec85615f23252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/langueTwo.html.twig", 1);
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
        $__internal_2e625e69f7210d82760cb521fa2dfd0f52471c109b5b25aa96b7cc2bcd6e462f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e625e69f7210d82760cb521fa2dfd0f52471c109b5b25aa96b7cc2bcd6e462f->enter($__internal_2e625e69f7210d82760cb521fa2dfd0f52471c109b5b25aa96b7cc2bcd6e462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/langueTwo.html.twig"));

        $__internal_1b2b2833f67a00c1c039ade575953e702222a66b17cec4c6110a7a3c01f6f58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2b2833f67a00c1c039ade575953e702222a66b17cec4c6110a7a3c01f6f58d->enter($__internal_1b2b2833f67a00c1c039ade575953e702222a66b17cec4c6110a7a3c01f6f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e625e69f7210d82760cb521fa2dfd0f52471c109b5b25aa96b7cc2bcd6e462f->leave($__internal_2e625e69f7210d82760cb521fa2dfd0f52471c109b5b25aa96b7cc2bcd6e462f_prof);

        
        $__internal_1b2b2833f67a00c1c039ade575953e702222a66b17cec4c6110a7a3c01f6f58d->leave($__internal_1b2b2833f67a00c1c039ade575953e702222a66b17cec4c6110a7a3c01f6f58d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7d23d09fe2bfecd14c851946af0429c313ce9323498861e8df0e02803b78a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d23d09fe2bfecd14c851946af0429c313ce9323498861e8df0e02803b78a31->enter($__internal_d7d23d09fe2bfecd14c851946af0429c313ce9323498861e8df0e02803b78a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_903c9a7abf99ae914cd06a039004decb1193373d7114ea366abce78cb12b18c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903c9a7abf99ae914cd06a039004decb1193373d7114ea366abce78cb12b18c0->enter($__internal_903c9a7abf99ae914cd06a039004decb1193373d7114ea366abce78cb12b18c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_903c9a7abf99ae914cd06a039004decb1193373d7114ea366abce78cb12b18c0->leave($__internal_903c9a7abf99ae914cd06a039004decb1193373d7114ea366abce78cb12b18c0_prof);

        
        $__internal_d7d23d09fe2bfecd14c851946af0429c313ce9323498861e8df0e02803b78a31->leave($__internal_d7d23d09fe2bfecd14c851946af0429c313ce9323498861e8df0e02803b78a31_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0559617add0d9a33e137bd969964ce38b6ecf045c6d4dbe1bec12f8718c80e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0559617add0d9a33e137bd969964ce38b6ecf045c6d4dbe1bec12f8718c80e24->enter($__internal_0559617add0d9a33e137bd969964ce38b6ecf045c6d4dbe1bec12f8718c80e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_50e11e23ab0eacd445f87bc6de403e40f500db14f911f8dbfb9a89625bd5fa49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e11e23ab0eacd445f87bc6de403e40f500db14f911f8dbfb9a89625bd5fa49->enter($__internal_50e11e23ab0eacd445f87bc6de403e40f500db14f911f8dbfb9a89625bd5fa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_50e11e23ab0eacd445f87bc6de403e40f500db14f911f8dbfb9a89625bd5fa49->leave($__internal_50e11e23ab0eacd445f87bc6de403e40f500db14f911f8dbfb9a89625bd5fa49_prof);

        
        $__internal_0559617add0d9a33e137bd969964ce38b6ecf045c6d4dbe1bec12f8718c80e24->leave($__internal_0559617add0d9a33e137bd969964ce38b6ecf045c6d4dbe1bec12f8718c80e24_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/langueTwo.html.twig";
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
#}", "@ESFEspaceAbonne/Default/langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\langueTwo.html.twig");
    }
}
