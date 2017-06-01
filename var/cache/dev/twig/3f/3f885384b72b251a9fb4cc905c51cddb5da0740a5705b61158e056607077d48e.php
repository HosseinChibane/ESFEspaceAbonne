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
        $__internal_75a9e0a9e3e3df49972998a603355814e47272c5d6205126fb3e14357196d9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a9e0a9e3e3df49972998a603355814e47272c5d6205126fb3e14357196d9bd->enter($__internal_75a9e0a9e3e3df49972998a603355814e47272c5d6205126fb3e14357196d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $__internal_f11aee227b021d0dfa0f5da5d04f4bf88286224a5353e129138b85c63e0aca4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11aee227b021d0dfa0f5da5d04f4bf88286224a5353e129138b85c63e0aca4e->enter($__internal_f11aee227b021d0dfa0f5da5d04f4bf88286224a5353e129138b85c63e0aca4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a9e0a9e3e3df49972998a603355814e47272c5d6205126fb3e14357196d9bd->leave($__internal_75a9e0a9e3e3df49972998a603355814e47272c5d6205126fb3e14357196d9bd_prof);

        
        $__internal_f11aee227b021d0dfa0f5da5d04f4bf88286224a5353e129138b85c63e0aca4e->leave($__internal_f11aee227b021d0dfa0f5da5d04f4bf88286224a5353e129138b85c63e0aca4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eea7c98dcf1662e5a7c885f1378c4b10ab535d2cec580773cea04d26f4ecdf28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea7c98dcf1662e5a7c885f1378c4b10ab535d2cec580773cea04d26f4ecdf28->enter($__internal_eea7c98dcf1662e5a7c885f1378c4b10ab535d2cec580773cea04d26f4ecdf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2235fdd87d99562bcc536a1ecc3afeb600c09b4c23c51bcfaa248f5c523e817d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2235fdd87d99562bcc536a1ecc3afeb600c09b4c23c51bcfaa248f5c523e817d->enter($__internal_2235fdd87d99562bcc536a1ecc3afeb600c09b4c23c51bcfaa248f5c523e817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2235fdd87d99562bcc536a1ecc3afeb600c09b4c23c51bcfaa248f5c523e817d->leave($__internal_2235fdd87d99562bcc536a1ecc3afeb600c09b4c23c51bcfaa248f5c523e817d_prof);

        
        $__internal_eea7c98dcf1662e5a7c885f1378c4b10ab535d2cec580773cea04d26f4ecdf28->leave($__internal_eea7c98dcf1662e5a7c885f1378c4b10ab535d2cec580773cea04d26f4ecdf28_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ab3cd81c35887655ffe3fc5146fb95edc5d66cd6f02ffb060d2da524383f80f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3cd81c35887655ffe3fc5146fb95edc5d66cd6f02ffb060d2da524383f80f5->enter($__internal_ab3cd81c35887655ffe3fc5146fb95edc5d66cd6f02ffb060d2da524383f80f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_62dbe2861ee764f3b8b8f2456f5bb19f1cd23980da1a804cd6647e43f700935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dbe2861ee764f3b8b8f2456f5bb19f1cd23980da1a804cd6647e43f700935d->enter($__internal_62dbe2861ee764f3b8b8f2456f5bb19f1cd23980da1a804cd6647e43f700935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_62dbe2861ee764f3b8b8f2456f5bb19f1cd23980da1a804cd6647e43f700935d->leave($__internal_62dbe2861ee764f3b8b8f2456f5bb19f1cd23980da1a804cd6647e43f700935d_prof);

        
        $__internal_ab3cd81c35887655ffe3fc5146fb95edc5d66cd6f02ffb060d2da524383f80f5->leave($__internal_ab3cd81c35887655ffe3fc5146fb95edc5d66cd6f02ffb060d2da524383f80f5_prof);

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
