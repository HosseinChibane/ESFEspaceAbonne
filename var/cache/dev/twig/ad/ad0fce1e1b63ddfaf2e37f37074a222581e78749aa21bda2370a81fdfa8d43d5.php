<?php

/* ESFEspaceAbonneBundle:Default:langueTwo.html.twig */
class __TwigTemplate_c765bbf6b5f421bd1c3b84f5a50297f02ed513f29d899da1732c57f7f4e71820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:langueTwo.html.twig", 1);
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
        $__internal_8a14e82d37fefb3e6e8d7bb5c613bf8a29294c7bdc54fa199179c145faac37fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a14e82d37fefb3e6e8d7bb5c613bf8a29294c7bdc54fa199179c145faac37fc->enter($__internal_8a14e82d37fefb3e6e8d7bb5c613bf8a29294c7bdc54fa199179c145faac37fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:langueTwo.html.twig"));

        $__internal_edac17ec9b8251cf33cb177828fc45f81602cc6568f4c0c10800258409fdebaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edac17ec9b8251cf33cb177828fc45f81602cc6568f4c0c10800258409fdebaf->enter($__internal_edac17ec9b8251cf33cb177828fc45f81602cc6568f4c0c10800258409fdebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a14e82d37fefb3e6e8d7bb5c613bf8a29294c7bdc54fa199179c145faac37fc->leave($__internal_8a14e82d37fefb3e6e8d7bb5c613bf8a29294c7bdc54fa199179c145faac37fc_prof);

        
        $__internal_edac17ec9b8251cf33cb177828fc45f81602cc6568f4c0c10800258409fdebaf->leave($__internal_edac17ec9b8251cf33cb177828fc45f81602cc6568f4c0c10800258409fdebaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_668e6feb65c7a880bc47661b63db423b8235a5d4921d5938ca77988a25f7ed42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668e6feb65c7a880bc47661b63db423b8235a5d4921d5938ca77988a25f7ed42->enter($__internal_668e6feb65c7a880bc47661b63db423b8235a5d4921d5938ca77988a25f7ed42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f1a38466723c1d50967e1fe6422fcdddf8d8c05c44e2b77347721ac500d533e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1a38466723c1d50967e1fe6422fcdddf8d8c05c44e2b77347721ac500d533e->enter($__internal_3f1a38466723c1d50967e1fe6422fcdddf8d8c05c44e2b77347721ac500d533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3f1a38466723c1d50967e1fe6422fcdddf8d8c05c44e2b77347721ac500d533e->leave($__internal_3f1a38466723c1d50967e1fe6422fcdddf8d8c05c44e2b77347721ac500d533e_prof);

        
        $__internal_668e6feb65c7a880bc47661b63db423b8235a5d4921d5938ca77988a25f7ed42->leave($__internal_668e6feb65c7a880bc47661b63db423b8235a5d4921d5938ca77988a25f7ed42_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f30aec2fbb64237524cdbe890523e46f7aea0e2393148c1b209d21eaee13595c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30aec2fbb64237524cdbe890523e46f7aea0e2393148c1b209d21eaee13595c->enter($__internal_f30aec2fbb64237524cdbe890523e46f7aea0e2393148c1b209d21eaee13595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_eb39bc9e0c3901adc53212aa8d4b78c02d320d892a898b2606bb04f82540fb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb39bc9e0c3901adc53212aa8d4b78c02d320d892a898b2606bb04f82540fb7c->enter($__internal_eb39bc9e0c3901adc53212aa8d4b78c02d320d892a898b2606bb04f82540fb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_eb39bc9e0c3901adc53212aa8d4b78c02d320d892a898b2606bb04f82540fb7c->leave($__internal_eb39bc9e0c3901adc53212aa8d4b78c02d320d892a898b2606bb04f82540fb7c_prof);

        
        $__internal_f30aec2fbb64237524cdbe890523e46f7aea0e2393148c1b209d21eaee13595c->leave($__internal_f30aec2fbb64237524cdbe890523e46f7aea0e2393148c1b209d21eaee13595c_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:langueTwo.html.twig";
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
#}", "ESFEspaceAbonneBundle:Default:langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/langueTwo.html.twig");
    }
}