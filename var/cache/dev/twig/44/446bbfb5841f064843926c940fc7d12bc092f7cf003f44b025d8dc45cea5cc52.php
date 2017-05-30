<?php

/* ESFEspaceAbonneBundle:Back:langueTwo.html.twig */
class __TwigTemplate_6d4b6b4ef7a15fa0354e81a78001f7b6569ff3d296866e32b2e5f646e2dc4d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:langueTwo.html.twig", 1);
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
        $__internal_8f5c4cee21316c86daa7f90d81770188a3f016eb1064beec0a0fce3e1243942a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5c4cee21316c86daa7f90d81770188a3f016eb1064beec0a0fce3e1243942a->enter($__internal_8f5c4cee21316c86daa7f90d81770188a3f016eb1064beec0a0fce3e1243942a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:langueTwo.html.twig"));

        $__internal_d4ea66a2ceff1c1000b02476975975a337ffff7b24af111b105a64d0d0f1fab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ea66a2ceff1c1000b02476975975a337ffff7b24af111b105a64d0d0f1fab1->enter($__internal_d4ea66a2ceff1c1000b02476975975a337ffff7b24af111b105a64d0d0f1fab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5c4cee21316c86daa7f90d81770188a3f016eb1064beec0a0fce3e1243942a->leave($__internal_8f5c4cee21316c86daa7f90d81770188a3f016eb1064beec0a0fce3e1243942a_prof);

        
        $__internal_d4ea66a2ceff1c1000b02476975975a337ffff7b24af111b105a64d0d0f1fab1->leave($__internal_d4ea66a2ceff1c1000b02476975975a337ffff7b24af111b105a64d0d0f1fab1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2e89da7252564e3509ada92ff59fc5c9e88e3e735ba7fd6ff9c7972e0fbb6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e89da7252564e3509ada92ff59fc5c9e88e3e735ba7fd6ff9c7972e0fbb6d5->enter($__internal_c2e89da7252564e3509ada92ff59fc5c9e88e3e735ba7fd6ff9c7972e0fbb6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3670cdbf728a881d0ee6ee05fb5d74b803e6eb5996bad589a311a54fbdc69099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3670cdbf728a881d0ee6ee05fb5d74b803e6eb5996bad589a311a54fbdc69099->enter($__internal_3670cdbf728a881d0ee6ee05fb5d74b803e6eb5996bad589a311a54fbdc69099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3670cdbf728a881d0ee6ee05fb5d74b803e6eb5996bad589a311a54fbdc69099->leave($__internal_3670cdbf728a881d0ee6ee05fb5d74b803e6eb5996bad589a311a54fbdc69099_prof);

        
        $__internal_c2e89da7252564e3509ada92ff59fc5c9e88e3e735ba7fd6ff9c7972e0fbb6d5->leave($__internal_c2e89da7252564e3509ada92ff59fc5c9e88e3e735ba7fd6ff9c7972e0fbb6d5_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b84b4474c55fa2ffb24e9a364500325d29e35f3cd2f33472816b6eb65f21a865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84b4474c55fa2ffb24e9a364500325d29e35f3cd2f33472816b6eb65f21a865->enter($__internal_b84b4474c55fa2ffb24e9a364500325d29e35f3cd2f33472816b6eb65f21a865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d8a6e9485703b3161b6a606aa2a89a12126615fbc7d48abd611ccf47c96ea46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a6e9485703b3161b6a606aa2a89a12126615fbc7d48abd611ccf47c96ea46f->enter($__internal_d8a6e9485703b3161b6a606aa2a89a12126615fbc7d48abd611ccf47c96ea46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d8a6e9485703b3161b6a606aa2a89a12126615fbc7d48abd611ccf47c96ea46f->leave($__internal_d8a6e9485703b3161b6a606aa2a89a12126615fbc7d48abd611ccf47c96ea46f_prof);

        
        $__internal_b84b4474c55fa2ffb24e9a364500325d29e35f3cd2f33472816b6eb65f21a865->leave($__internal_b84b4474c55fa2ffb24e9a364500325d29e35f3cd2f33472816b6eb65f21a865_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:langueTwo.html.twig";
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
#}", "ESFEspaceAbonneBundle:Back:langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/langueTwo.html.twig");
    }
}
