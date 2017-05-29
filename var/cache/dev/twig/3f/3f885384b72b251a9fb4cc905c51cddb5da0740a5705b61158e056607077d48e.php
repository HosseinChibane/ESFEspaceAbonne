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
        $__internal_f1cd73ea4d69916d7acf6367efdbaa24b5f11c7c85105847c379481bce5503fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1cd73ea4d69916d7acf6367efdbaa24b5f11c7c85105847c379481bce5503fa->enter($__internal_f1cd73ea4d69916d7acf6367efdbaa24b5f11c7c85105847c379481bce5503fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $__internal_56fbc9cc20c6bf52f6c417a4b159678ce9be576dcf2882f9371977f2b50684e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fbc9cc20c6bf52f6c417a4b159678ce9be576dcf2882f9371977f2b50684e1->enter($__internal_56fbc9cc20c6bf52f6c417a4b159678ce9be576dcf2882f9371977f2b50684e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1cd73ea4d69916d7acf6367efdbaa24b5f11c7c85105847c379481bce5503fa->leave($__internal_f1cd73ea4d69916d7acf6367efdbaa24b5f11c7c85105847c379481bce5503fa_prof);

        
        $__internal_56fbc9cc20c6bf52f6c417a4b159678ce9be576dcf2882f9371977f2b50684e1->leave($__internal_56fbc9cc20c6bf52f6c417a4b159678ce9be576dcf2882f9371977f2b50684e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d5e9a361d4319ffbdc79905d3fde5c7696cbc227d18ed69a36ee30659c503d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d5e9a361d4319ffbdc79905d3fde5c7696cbc227d18ed69a36ee30659c503d->enter($__internal_97d5e9a361d4319ffbdc79905d3fde5c7696cbc227d18ed69a36ee30659c503d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50e8cff991bb7ea50711fb23ab15ef8c55c4dfc1931b3f8574646d46f5cf0003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e8cff991bb7ea50711fb23ab15ef8c55c4dfc1931b3f8574646d46f5cf0003->enter($__internal_50e8cff991bb7ea50711fb23ab15ef8c55c4dfc1931b3f8574646d46f5cf0003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_50e8cff991bb7ea50711fb23ab15ef8c55c4dfc1931b3f8574646d46f5cf0003->leave($__internal_50e8cff991bb7ea50711fb23ab15ef8c55c4dfc1931b3f8574646d46f5cf0003_prof);

        
        $__internal_97d5e9a361d4319ffbdc79905d3fde5c7696cbc227d18ed69a36ee30659c503d->leave($__internal_97d5e9a361d4319ffbdc79905d3fde5c7696cbc227d18ed69a36ee30659c503d_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0a7b41b2d06740d8878f558732a8eb4f7bbb424a0aea8e02b78ffc8d33117285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7b41b2d06740d8878f558732a8eb4f7bbb424a0aea8e02b78ffc8d33117285->enter($__internal_0a7b41b2d06740d8878f558732a8eb4f7bbb424a0aea8e02b78ffc8d33117285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e886f4437a1d4486b7055702ffb2f090fc9ab94ad2883676a39b57417365366d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e886f4437a1d4486b7055702ffb2f090fc9ab94ad2883676a39b57417365366d->enter($__internal_e886f4437a1d4486b7055702ffb2f090fc9ab94ad2883676a39b57417365366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e886f4437a1d4486b7055702ffb2f090fc9ab94ad2883676a39b57417365366d->leave($__internal_e886f4437a1d4486b7055702ffb2f090fc9ab94ad2883676a39b57417365366d_prof);

        
        $__internal_0a7b41b2d06740d8878f558732a8eb4f7bbb424a0aea8e02b78ffc8d33117285->leave($__internal_0a7b41b2d06740d8878f558732a8eb4f7bbb424a0aea8e02b78ffc8d33117285_prof);

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
